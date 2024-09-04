<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Endpoint;

class GetVirtualMachinePackages extends \KatapultAPI\Public\Runtime\Client\BaseEndpoint implements \KatapultAPI\Public\Runtime\Client\Endpoint
{
    use \KatapultAPI\Public\Runtime\Client\EndpointTrait;

    /**
     * Return the currently available virtual machine packages.
     *
     * @param array $queryParameters {
     *
     * @var int $page
     * @var int $per_page
     *          }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/virtual_machine_packages';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Public\Model\VirtualMachinePackagesGetResponse200|null
     *
     * @throws \KatapultAPI\Public\Exception\GetVirtualMachinePackagesForbiddenException
     * @throws \KatapultAPI\Public\Exception\GetVirtualMachinePackagesTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Public\Model\VirtualMachinePackagesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Public\Exception\GetVirtualMachinePackagesForbiddenException($serializer->deserialize($body, 'KatapultAPI\Public\Model\ResponseAPIAuthenticator403Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Public\Exception\GetVirtualMachinePackagesTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Public\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
