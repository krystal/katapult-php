<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Endpoint;

class GetVirtualMachinePackages extends \Krystal\Katapult\KatapultAPI\Runtime\Client\BaseEndpoint implements \Krystal\Katapult\KatapultAPI\Runtime\Client\Endpoint
{
    use \Krystal\Katapult\KatapultAPI\Runtime\Client\EndpointTrait;

    /**
     * @param array $queryParameters {
     *
     * @var string $organization[id] Provide an organization to only show packages available to the given organization (otherwise only public packages will be displayed). All 'organization[]' params are mutually exclusive, only one can be provided.
     * @var string $organization[sub_domain] Provide an organization to only show packages available to the given organization (otherwise only public packages will be displayed). All 'organization[]' params are mutually exclusive, only one can be provided.
     * @var int    $page
     * @var int    $per_page
     *             }
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
        $optionsResolver->setDefined(['organization[id]', 'organization[sub_domain]', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('organization[id]', ['string']);
        $optionsResolver->addAllowedTypes('organization[sub_domain]', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \Krystal\Katapult\KatapultAPI\Model\VirtualMachinePackagesGetResponse200|null
     *
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachinePackagesBadRequestException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachinePackagesForbiddenException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachinePackagesNotFoundException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachinePackagesTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachinePackagesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachinePackagesBadRequestException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachinePackagesForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachinePackagesNotFoundException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseOrganizationNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachinePackagesTooManyRequestsException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
