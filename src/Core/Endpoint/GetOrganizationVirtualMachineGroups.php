<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetOrganizationVirtualMachineGroups extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Return a list of all virtual machine groups for an organization
     * ## Scopes
     * - `virtual_machine_groups`
     * - `virtual_machine_groups:read`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     *
     * @param array $queryParameters {
     *                               'organization[id]': string, The organization to return groups for.
     *
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     *      'organization[sub_domain]': string, The organization to return groups for.
     *
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     * }
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
        return '/organizations/organization/virtual_machine_groups';
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
        $optionsResolver->setDefined(['organization[id]', 'organization[sub_domain]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('organization[id]', ['string']);
        $optionsResolver->addAllowedTypes('organization[sub_domain]', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachineGroupsGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachineGroupsGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseOrganizationNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationVirtualMachineGroupsServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}
