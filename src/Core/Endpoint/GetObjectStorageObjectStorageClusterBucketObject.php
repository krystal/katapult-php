<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetObjectStorageObjectStorageClusterBucketObject extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns object storage object details
     * ## Scopes
     * - `object_storage:read`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     *
     * @param array $queryParameters {
     *
     * @var string $object_storage_cluster[region] The object storage cluster region for the bucket
     * @var string $bucket[name] The name of the object storage bucket
     * @var string $path The name or path for the object
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
        return '/object_storage/object_storage_cluster/buckets/bucket/object';
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
        $optionsResolver->setDefined(['object_storage_cluster[region]', 'bucket[name]', 'path']);
        $optionsResolver->setRequired(['path']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('object_storage_cluster[region]', ['string']);
        $optionsResolver->addAllowedTypes('bucket[name]', ['string']);
        $optionsResolver->addAllowedTypes('path', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\ObjectStorageObjectStorageClusterBucketsBucketObjectGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectNotAcceptableException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectInternalServerErrorException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectServiceUnavailableException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectGatewayTimeoutException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\ObjectStorageObjectStorageClusterBucketsBucketObjectGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectNotFoundException($response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectNotAcceptableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseObjectInTrashResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectInternalServerErrorException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseMultipleObjectStorageBucketsFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (504 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketObjectGatewayTimeoutException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseNetworkErrorResponse', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}
