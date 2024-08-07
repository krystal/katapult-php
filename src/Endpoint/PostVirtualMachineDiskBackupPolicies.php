<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Endpoint;

class PostVirtualMachineDiskBackupPolicies extends \Krystal\Katapult\KatapultAPI\Runtime\Client\BaseEndpoint implements \Krystal\Katapult\KatapultAPI\Runtime\Client\Endpoint
{
    use \Krystal\Katapult\KatapultAPI\Runtime\Client\EndpointTrait;

    public function __construct(?\Krystal\Katapult\KatapultAPI\Model\VirtualMachinesVirtualMachineDiskBackupPoliciesPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/virtual_machines/:virtual_machine/disk_backup_policies';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Krystal\Katapult\KatapultAPI\Model\VirtualMachinesVirtualMachineDiskBackupPoliciesPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Krystal\Katapult\KatapultAPI\Model\VirtualMachinesVirtualMachineDiskBackupPoliciesPostResponse200|null
     *
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesBadRequestException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesForbiddenException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesNotFoundException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesNotAcceptableException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesUnprocessableEntityException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\VirtualMachinesVirtualMachineDiskBackupPoliciesPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesBadRequestException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesNotFoundException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseVirtualMachineNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesNotAcceptableException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseObjectInTrashResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesUnprocessableEntityException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseValidationErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostVirtualMachineDiskBackupPoliciesTooManyRequestsException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
