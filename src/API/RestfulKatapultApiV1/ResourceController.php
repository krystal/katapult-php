<?php

namespace Krystal\Katapult\API\RestfulKatapultApiV1;

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

    /**
     * @var RestfulKatapultApiV1
     */
    private $api;

    /**
     * @var string
     */
    private $resourceClass;

    /**
     * @var string
     */
    private $resourceName;

    /**
     * @var string
     */
    private $resourceNamePlural;

    /**
     * @var string
     */
    private $mappedResourceClass;

    /**
     * @var array
     */
    private $arguments;

    /**
     * ResourceController constructor.
     * @param $resourceClass
     * @param RestfulKatapultApiV1 $api
     */
    public function __construct($resourceClass, RestfulKatapultApiV1 $api, ...$args)
    {
        $mappedResourceClass = self::mapResourceToApiVersion($resourceClass);

        $this->api = $api;
        $this->resourceClass = $resourceClass;
        $this->mappedResourceClass = $mappedResourceClass;
        $this->resourceName = $mappedResourceClass::getResourceName();
        $this->resourceNamePlural = $mappedResourceClass::getResourceName(true);
        $this->arguments = $args;
    }

    /**
     * @param $resourceClass
     * @return string
     */
    protected static function mapResourceToApiVersion($resourceClass)
    {
        $resourceName = explode('\\', $resourceClass, 4);
        $localClassName = __NAMESPACE__ . '\\Resources\\' . $resourceName[3];
        return (class_exists($localClassName)) ? $localClassName : $resourceClass;
    }

    /**
     * @param \stdClass $resourceSpec
     * @return ResourceInterface
     */
    public function createResourceFromSpec($resourceSpec)
    {
        $resourceClass = $this->mappedResourceClass; // Due to lacking Uniform Variable Syntax in PHP < 7
        return $resourceClass::instantiateFromSpec($resourceSpec, $this);
    }

    /**
     * @param null $resourceId
     * @return string
     */
    public function createApiUrl($resourceId = null)
    {
        $mappedResourceClass = $this->mappedResourceClass; // Due to lacking Uniform Variable Syntax in PHP < 7
        return $mappedResourceClass::getUrl($resourceId, $this->arguments);
    }

    /**
     * @return array
     */
    public function all()
    {
        $res = $this->api->get($this->createApiUrl());

        $resources = [];
        $resourceClass = $this->mappedResourceClass; // Due to lacking Uniform Variable Syntax in PHP < 7

        foreach(\GuzzleHttp\json_decode($res->getBody())->{$this->resourceNamePlural} as $resourceSpec)
        {
            $resources[] = $resourceClass::instantiateFromSpec($resourceSpec, $this);
        }

        return $resources;
    }

    /**
     * @param $resourceId
     * @return ResourceInterface
     */
    public function get($resourceId)
    {
        $res = $this->api->get($this->createApiUrl($resourceId));
        return $this->createResourceFromSpec(\GuzzleHttp\json_decode($res->getBody())->{$this->resourceName});
    }

    /**
     * @param array $specification
     * @return ResourceInterface
     */
    public function create(array $specification = null)
    {
        if(!$specification) $specification = [];
        $res = $this->api->post($this->createApiUrl(), $specification);

        return $this->createResourceFromSpec(\GuzzleHttp\json_decode($res->getBody())->{$this->resourceName});
    }

    public function __call($name, $arguments)
    {
        // Handover to the Resource directly in this case..
        $mappedResourceClass = $this->mappedResourceClass; // Due to lacking Uniform Variable Syntax in PHP < 7
        return $mappedResourceClass::callApiAction($this, $name, $arguments);
    }

    public function __get($name)
    {
        switch($name)
        {
            case 'api':
            case 'resourceName':
                return $this->{$name};
        }

        return null;
    }
}
