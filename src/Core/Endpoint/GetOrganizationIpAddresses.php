<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetOrganizationIpAddresses extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns a list of all IP addresses belonging to an organization
     * ## Scopes
     * - `ip_addresses`
     * - `ip_addresses:read`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     *
     * @param array $queryParameters {
     *
     * @var string $organization[id] The organization to use when looking up IP addresses.
     *
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     * @var string $organization[sub_domain] The organization to use when looking up IP addresses.
     *
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     * @var bool $allocated If true, only return allocated IP addresss. If false, only return unallocated IP addresses.
     * @var int  $page The page number to request. If not provided, the first page will be returned.
     * @var int  $per_page The number of items to return per page. If not provided, the default value will be used.
     *           }
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
        return '/organizations/organization/ip_addresses';
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
        $optionsResolver->setDefined(['organization[id]', 'organization[sub_domain]', 'allocated', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'per_page' => 30]);
        $optionsResolver->addAllowedTypes('organization[id]', ['string']);
        $optionsResolver->addAllowedTypes('organization[sub_domain]', ['string']);
        $optionsResolver->addAllowedTypes('allocated', ['bool']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\OrganizationsOrganizationIpAddressesGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetOrganizationIpAddressesBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationIpAddressesForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationIpAddressesNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationIpAddressesTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationIpAddressesServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\OrganizationsOrganizationIpAddressesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationIpAddressesBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationIpAddressesForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationIpAddressesNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseOrganizationNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationIpAddressesTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationIpAddressesServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}
