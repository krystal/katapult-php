<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class DeleteVirtualNetwork extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * ## Scopes
     * - `virtual_networks`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     */
    public function __construct(?\KatapultAPI\Core\Model\VirtualNetworksVirtualNetworkDeleteBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return '/virtual_networks/virtual_network';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \KatapultAPI\Core\Model\VirtualNetworksVirtualNetworkDeleteBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Core\Model\VirtualNetworksVirtualNetworkDeleteResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\DeleteVirtualNetworkBadRequestException
     * @throws \KatapultAPI\Core\Exception\DeleteVirtualNetworkForbiddenException
     * @throws \KatapultAPI\Core\Exception\DeleteVirtualNetworkNotFoundException
     * @throws \KatapultAPI\Core\Exception\DeleteVirtualNetworkConflictException
     * @throws \KatapultAPI\Core\Exception\DeleteVirtualNetworkTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\DeleteVirtualNetworkServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\VirtualNetworksVirtualNetworkDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteVirtualNetworkBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteVirtualNetworkForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteVirtualNetworkNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseVirtualNetworkNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteVirtualNetworkConflictException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseDeletionRestrictedResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteVirtualNetworkTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteVirtualNetworkServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}
