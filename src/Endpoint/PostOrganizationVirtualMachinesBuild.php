<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Endpoint;

class PostOrganizationVirtualMachinesBuild extends \Krystal\Katapult\KatapultAPI\Runtime\Client\BaseEndpoint implements \Krystal\Katapult\KatapultAPI\Runtime\Client\Endpoint
{
    use \Krystal\Katapult\KatapultAPI\Runtime\Client\EndpointTrait;

    /**
     * Builds a new virtual machine based on the arguments provided to this endpoint. Virtual machines will be built in the background. This task will return an task object that will allow you to monitor the build process using the appropriate API action. This action only offers a small subset of the full functionality needed when provisioning virtual machines - see the `build_from_spec` action for a full advanced virtual machine creation method.
     * ## Scopes
     * - `virtual_machines`.
     */
    public function __construct(?\Krystal\Katapult\KatapultAPI\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody $requestBody = null)
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
        if ($this->body instanceof \Krystal\Katapult\KatapultAPI\Model\OrganizationsOrganizationVirtualMachinesBuildPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Krystal\Katapult\KatapultAPI\Model\OrganizationsOrganizationVirtualMachinesBuildPostResponse201|null
     *
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildBadRequestException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildForbiddenException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildNotFoundException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildUnprocessableEntityException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildTooManyRequestsException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationVirtualMachinesBuildPostResponse201', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildBadRequestException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildNotFoundException($response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildUnprocessableEntityException($response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildTooManyRequestsException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\PostOrganizationVirtualMachinesBuildServiceUnavailableException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
