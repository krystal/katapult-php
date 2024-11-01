<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class PostObjectStorageAccessKeyGenerateCredentials extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns new S3 credentials for an object storage access key. Existing credentials cannot be retrieved. Credentials may take a few minutes to become active.
     * ## Scopes
     * - `object_storage`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     */
    public function __construct(?\KatapultAPI\Core\Model\ObjectStorageAccessKeysAccessKeyGenerateCredentialsPostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/object_storage/access_keys/access_key/generate_credentials';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \KatapultAPI\Core\Model\ObjectStorageAccessKeysAccessKeyGenerateCredentialsPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Core\Model\ObjectStorageAccessKeysAccessKeyGenerateCredentialsPostResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsBadRequestException
     * @throws \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsForbiddenException
     * @throws \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsNotFoundException
     * @throws \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsNotAcceptableException
     * @throws \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsUnprocessableEntityException
     * @throws \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\ObjectStorageAccessKeysAccessKeyGenerateCredentialsPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseObjectStorageAccessKeyNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsNotAcceptableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseTaskQueueingErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsUnprocessableEntityException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseObjectStorageProvisioningErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PostObjectStorageAccessKeyGenerateCredentialsServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}