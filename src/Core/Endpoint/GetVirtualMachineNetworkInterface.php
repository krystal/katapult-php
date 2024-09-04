<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetVirtualMachineNetworkInterface extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Return information about a virtual machine network interface for a specific network
     * ## Scopes
     * - `virtual_machines`
     * - `virtual_machines:read`.
     *
     * @param array $queryParameters {
     *                               'virtual_machine[id]': string, The virtual machine to find the network interface for. All 'virtual_machine[]' params are mutually exclusive, only one can be provided.
     *                               'virtual_machine[fqdn]': string, The virtual machine to find the network interface for. All 'virtual_machine[]' params are mutually exclusive, only one can be provided.
     *                               'network[id]': string, The network to find the network interface for. All 'network[]' params are mutually exclusive, only one can be provided.
     *                               'network[permalink]': string, The network to find the network interface for. All 'network[]' params are mutually exclusive, only one can be provided.
     *                               }
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
        return '/virtual_machines/virtual_machine/networks/network/interface';
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
        $optionsResolver->setDefined(['virtual_machine[id]', 'virtual_machine[fqdn]', 'network[id]', 'network[permalink]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('virtual_machine[id]', ['string']);
        $optionsResolver->addAllowedTypes('virtual_machine[fqdn]', ['string']);
        $optionsResolver->addAllowedTypes('network[id]', ['string']);
        $optionsResolver->addAllowedTypes('network[permalink]', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\VirtualMachinesVirtualMachineNetworksNetworkInterfaceGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceNotAcceptableException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\VirtualMachinesVirtualMachineNetworksNetworkInterfaceGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceNotFoundException($response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceNotAcceptableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseObjectInTrashResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineNetworkInterfaceServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
