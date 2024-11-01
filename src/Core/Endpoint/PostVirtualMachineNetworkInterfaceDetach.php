<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class PostVirtualMachineNetworkInterfaceDetach extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Detach a network interface from its virtual machine.
     * ## Scopes
     * - `virtual_machines`
     * - `virtual_machines:network_interfaces`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     */
    public function __construct(?\KatapultAPI\Core\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceDetachPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/virtual_machine_network_interfaces/virtual_machine_network_interface/detach';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \KatapultAPI\Core\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceDetachPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Core\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceDetachPostResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachBadRequestException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachForbiddenException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachNotFoundException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachNotAcceptableException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachUnprocessableEntityException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceDetachPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseVirtualMachineNetworkInterfaceNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachNotAcceptableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseTaskQueueingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachUnprocessableEntityException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseVirtualMachineNetworkInterfaceAlreadyDetachedResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineNetworkInterfaceDetachServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}