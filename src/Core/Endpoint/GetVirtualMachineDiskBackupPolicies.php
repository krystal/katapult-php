<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetVirtualMachineDiskBackupPolicies extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns a list of all disk backup policies for a given virtual machine
     * ## Scopes
     * - `disk_backup_policies`
     * - `disk_backup_policies:read`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     *
     * @param array $queryParameters {
     *
     * @var string $virtual_machine[id] The virtual machine to return disk backup policies for.
     *
     * All 'virtual_machine[]' params are mutually exclusive, only one can be provided.
     * @var string $virtual_machine[fqdn] The virtual machine to return disk backup policies for.
     *
     * All 'virtual_machine[]' params are mutually exclusive, only one can be provided.
     * @var bool $include_disks If true, the returned list will include backup policies owned by disks assigned to this virtual machine in addition to those that belong to the whole virtual machine
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
        return '/virtual_machines/virtual_machine/disk_backup_policies';
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
        $optionsResolver->setDefined(['virtual_machine[id]', 'virtual_machine[fqdn]', 'include_disks', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'per_page' => 30]);
        $optionsResolver->addAllowedTypes('virtual_machine[id]', ['string']);
        $optionsResolver->addAllowedTypes('virtual_machine[fqdn]', ['string']);
        $optionsResolver->addAllowedTypes('include_disks', ['bool']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\VirtualMachinesVirtualMachineDiskBackupPoliciesGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesNotAcceptableException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\VirtualMachinesVirtualMachineDiskBackupPoliciesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseVirtualMachineNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesNotAcceptableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseObjectInTrashResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetVirtualMachineDiskBackupPoliciesServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}
