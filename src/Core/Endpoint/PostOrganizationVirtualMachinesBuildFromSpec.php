<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class PostOrganizationVirtualMachinesBuildFromSpec extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Builds a new virtual machine by receiving a virtual machine spec document
     * ## Scopes
     * - `virtual_machines`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     */
    public function __construct(?\KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildFromSpecPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/organizations/organization/virtual_machines/build_from_spec';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildFromSpecPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildFromSpecPostResponse201|null
     *
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecBadRequestException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecForbiddenException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecNotFoundException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecUnprocessableEntityException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\OrganizationsOrganizationVirtualMachinesBuildFromSpecPostResponse201', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecBadRequestException($response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseOrganizationNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecUnprocessableEntityException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseValidationErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationVirtualMachinesBuildFromSpecServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}
