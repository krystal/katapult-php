<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Endpoint;

class PostVirtualMachineNetworkInterfaceAllocateNewIp extends \Krystal\Katapult\KatapultAPI\Runtime\Client\BaseEndpoint implements \Krystal\Katapult\KatapultAPI\Runtime\Client\Endpoint
{
    use \Krystal\Katapult\KatapultAPI\Runtime\Client\EndpointTrait;

    /**
     * Add a new IP address to this organization and allocate it to a virtual machine network interface.
     */
    public function __construct(?\Krystal\Katapult\KatapultAPI\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAllocateNewIpPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/virtual_machine_network_interfaces/virtual_machine_network_interface/allocate_new_ip';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Krystal\Katapult\KatapultAPI\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAllocateNewIpPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Krystal\Katapult\KatapultAPI\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAllocateNewIpPostResponse200|null
     *
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpBadRequestException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpForbiddenException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpNotFoundException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpTooManyRequestsException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAllocateNewIpPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpBadRequestException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpNotFoundException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseVirtualMachineNetworkInterfaceNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpTooManyRequestsException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineNetworkInterfaceAllocateNewIpServiceUnavailableException($response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
