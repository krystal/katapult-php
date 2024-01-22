<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Endpoint;

class GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersion extends \Krystal\Katapult\KatapultAPI\Runtime\Client\BaseEndpoint implements \Krystal\Katapult\KatapultAPI\Runtime\Client\Endpoint
{
    use \Krystal\Katapult\KatapultAPI\Runtime\Client\EndpointTrait;

    /**
     * @param array $queryParameters {
     *
     * @var string $virtual_machine_network_interface[id] The network interface to get IP addresses for. All 'virtual_machine_network_interface[]' params are mutually exclusive, only one can be provided.
     * @var string $address_version The IP address version to return results for
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
        return '/virtual_machine_network_interfaces/:virtual_machine_network_interface/available_ips/:address_version';
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
        $optionsResolver->setDefined(['virtual_machine_network_interface[id]', 'address_version']);
        $optionsResolver->setRequired(['address_version']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('virtual_machine_network_interface[id]', ['string']);
        $optionsResolver->addAllowedTypes('address_version', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Krystal\Katapult\KatapultAPI\Model\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAvailableIpsAddressVersionGetResponse200|null
     *
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersionBadRequestException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersionForbiddenException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersionNotFoundException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersionTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAvailableIpsAddressVersionGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersionBadRequestException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersionForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersionNotFoundException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseVirtualMachineNetworkInterfaceNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersionTooManyRequestsException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
