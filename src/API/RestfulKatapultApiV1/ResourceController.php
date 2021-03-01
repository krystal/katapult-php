<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1;

use GuzzleHttp\Utils as GuzzleUtils;
use Krystal\Katapult\API\ResourceControllerInterface;
use Krystal\Katapult\API\RestfulKatapultApiV1;
use Krystal\Katapult\Resources\ResourceInterface;
use Krystal\Katapult\Traits\Makeable;

/**
 * Class ResourceController
 * @package Krystal\Katapult\API\RestfulKatapultApiV1
 *
 * @property-read RestfulKatapultApiV1 $api
 * @property-read string $resourceName
 */
class ResourceController implements ResourceControllerInterface
{
    use Makeable;

    private RestfulKatapultApiV1 $api;
    private string $resourceClass;
    private string $resourceName;
    private string $resourceNamePlural;
    private string $mappedResourceClass;
    private array $arguments;

    public function __construct(string $resourceClass, RestfulKatapultApiV1 $api, ...$args)
    {
        $mappedResourceClass = self::mapResourceToApiVersion($resourceClass);

        $this->api = $api;
        $this->resourceClass = $resourceClass;
        $this->mappedResourceClass = $mappedResourceClass;
        $this->resourceName = $mappedResourceClass::getResourceName();
        $this->resourceNamePlural = $mappedResourceClass::getResourceName(true);
        $this->arguments = $args;
    }

    protected static function mapResourceToApiVersion(string $resourceClass): string
    {
        $resourceName = explode('\\', $resourceClass, 4);
        $localClassName = __NAMESPACE__ . '\\Resources\\' . $resourceName[3];
        return (class_exists($localClassName)) ? $localClassName : $resourceClass;
    }

    public function createResourceFromSpec(object $resourceSpec): ResourceInterface
    {
        $resourceClass = $this->mappedResourceClass; // Due to lacking Uniform Variable Syntax in PHP < 7
        return $resourceClass::instantiateFromSpec($resourceSpec, $this);
    }

    public function createApiUrl(string $resourceId = null, array $contextualArguments = null): string
    {
        if (!$contextualArguments) {
            $contextualArguments = [];
        }

        return $this->mappedResourceClass::getUrl($resourceId, array_merge($this->arguments, $contextualArguments));
    }

    public function first(): ? ResourceInterface
    {
        $resources = $this->all(false);
        return count($resources) > 0 ? reset($resources) : null;
    }

    /**
     * @param bool $fetchAllPages
     * @return array|ResourceInterface[]
     */
    public function all(bool $fetchAllPages = true): array
    {
        // If this resource doesn't support index listing, just return an empty array
        if (!$this->mappedResourceClass::supportsResourceIndex()) {
            return [];
        }

        $lastFetchedPage = null;
        $nextPage = 1;
        $totalPages = null;

        $resources = [];

        while ($lastFetchedPage === null || $lastFetchedPage < $totalPages) {
            $res = $this->api->get($this->createApiUrl(null, ['query' => ['page' => $nextPage]]));
            $responseBody = GuzzleUtils::jsonDecode($res->getBody());

            foreach ($responseBody->{$this->resourceNamePlural} as $resourceSpec) {
                $resources[] = $this->mappedResourceClass::instantiateFromSpec($resourceSpec, $this);
            }

            // If this route doesn't support pagination, break out
            if (!$fetchAllPages || !isset($responseBody->pagination)) {
                break;
            }

            $lastFetchedPage = $nextPage;
            $totalPages = $responseBody->pagination->total_pages;
            $nextPage++;
        }

        return $resources;
    }

    public function get(string $resourceId): ResourceInterface
    {
        $res = $this->api->get($this->createApiUrl($resourceId));

        return $this->createResourceFromSpec(GuzzleUtils::jsonDecode($res->getBody())->{$this->resourceName});
    }

    public function create(array $specification = null): ResourceInterface
    {
        if (!$specification) {
            $specification = [];
        }

        $res = $this->api->post($this->createApiUrl(), $specification);

        return $this->createResourceFromSpec(GuzzleUtils::jsonDecode($res->getBody())->{$this->resourceName});
    }

    public function __call(string $name, $arguments)
    {
        // Handover to the Resource directly in this case..
        return $this->mappedResourceClass::callApiAction($this, $name, $arguments);
    }

    public function __get($name)
    {
        switch ($name) {
            case 'api':
            case 'resourceName':
                return $this->{$name};
        }

        return null;
    }
}
