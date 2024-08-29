<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class PostVirtualMachineDiskBackupPolicies extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Creates a new disk backup policy for a virtual machine
     * ## Scopes
     * - `disk_backup_policies`.
     */
    public function __construct(?\KatapultAPI\Core\Model\VirtualMachinesVirtualMachineDiskBackupPoliciesPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/virtual_machines/virtual_machine/disk_backup_policies';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \KatapultAPI\Core\Model\VirtualMachinesVirtualMachineDiskBackupPoliciesPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Core\Model\VirtualMachinesVirtualMachineDiskBackupPoliciesPostResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesBadRequestException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesForbiddenException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesNotFoundException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesNotAcceptableException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesUnprocessableEntityException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\VirtualMachinesVirtualMachineDiskBackupPoliciesPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesBadRequestException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesNotFoundException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseVirtualMachineNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesNotAcceptableException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseObjectInTrashResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesUnprocessableEntityException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseValidationErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostVirtualMachineDiskBackupPoliciesServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}