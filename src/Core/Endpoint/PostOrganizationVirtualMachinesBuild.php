<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class PostOrganizationVirtualMachinesBuild extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Builds a new virtual machine based on the arguments provided to this endpoint. Virtual machines will be built in the background. This task will return an task object that will allow you to monitor the build process using the appropriate API action. This action only offers a small subset of the full functionality needed when provisioning virtual machines - see the `build_from_spec` action for a full advanced virtual machine creation method.
     * ## Scopes
     * - `virtual_machines`.
     */
    public function __construct(?\KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/organizations/organization/virtual_machines/build';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostResponse201|null
     *
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildBadRequestException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildForbiddenException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildNotFoundException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildUnprocessableEntityException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildPostResponse201', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildNotFoundException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildUnprocessableEntityException($response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
