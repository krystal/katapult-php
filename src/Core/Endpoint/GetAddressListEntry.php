<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetAddressListEntry extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns details for an address list entry.
     * ## Scopes
     * - `address_lists`
     * - `address_lists:read`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     *
     * @param array $queryParameters {
     *
     * @var string $address_list_entry[id] The address list entry to return.
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
        return '/address_list_entries/address_list_entry';
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
        $optionsResolver->setDefined(['address_list_entry[id]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('address_list_entry[id]', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\AddressListEntriesAddressListEntryGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetAddressListEntryBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetAddressListEntryForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetAddressListEntryNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetAddressListEntryTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetAddressListEntryServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\AddressListEntriesAddressListEntryGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetAddressListEntryBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetAddressListEntryForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetAddressListEntryNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAddressListEntryNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetAddressListEntryTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetAddressListEntryServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}
