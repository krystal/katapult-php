<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Endpoint;

class GetVirtualMachineNetworkInterface extends \Krystal\Katapult\KatapultAPI\Runtime\Client\BaseEndpoint implements \Krystal\Katapult\KatapultAPI\Runtime\Client\Endpoint
{
    use \Krystal\Katapult\KatapultAPI\Runtime\Client\EndpointTrait;

    /**
     * @param array $queryParameters {
     *
     * @var string $virtual_machine[id] The virtual machine to find the network interface for. All 'virtual_machine[]' params are mutually exclusive, only one can be provided.
     * @var string $virtual_machine[fqdn] The virtual machine to find the network interface for. All 'virtual_machine[]' params are mutually exclusive, only one can be provided.
     * @var string $network[id] The network to find the network interface for. All 'network[]' params are mutually exclusive, only one can be provided.
     * @var string $network[permalink] The network to find the network interface for. All 'network[]' params are mutually exclusive, only one can be provided.
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
        return '/virtual_machines/:virtual_machine/networks/:network/interface';
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
     * @return \Krystal\Katapult\KatapultAPI\Model\VirtualMachinesVirtualMachineNetworksNetworkInterfaceGetResponse200|null
     *
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceBadRequestException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceForbiddenException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceNotFoundException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceNotAcceptableException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachinesVirtualMachineNetworksNetworkInterfaceGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceBadRequestException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceNotFoundException($response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceNotAcceptableException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseObjectInTrashResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceTooManyRequestsException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
