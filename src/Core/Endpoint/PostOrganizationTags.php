<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class PostOrganizationTags extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Creates a new tag with the provided properties
     * ## Scopes
     * - `tags`.
     */
    public function __construct(?\KatapultAPI\Core\Model\OrganizationsOrganizationTagsPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/organizations/organization/tags';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \KatapultAPI\Core\Model\OrganizationsOrganizationTagsPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Core\Model\OrganizationsOrganizationTagsPostResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\PostOrganizationTagsBadRequestException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationTagsForbiddenException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationTagsNotFoundException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationTagsUnprocessableEntityException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationTagsTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\PostOrganizationTagsServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\OrganizationsOrganizationTagsPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationTagsBadRequestException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationTagsForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationTagsNotFoundException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseOrganizationNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationTagsUnprocessableEntityException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseValidationErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationTagsTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostOrganizationTagsServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
