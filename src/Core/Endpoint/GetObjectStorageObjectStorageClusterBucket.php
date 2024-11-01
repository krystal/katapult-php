<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetObjectStorageObjectStorageClusterBucket extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns object storage bucket details
     * ## Scopes
     * - `object_storage:read`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     *
     * @param array $queryParameters {
     *
     * @var string $object_storage_cluster[region] The object storage cluster region for the bucket
     * @var string $bucket[name] The name of the object storage bucket.
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
        return '/object_storage/object_storage_cluster/buckets/bucket';
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
        $optionsResolver->setDefined(['object_storage_cluster[region]', 'bucket[name]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('object_storage_cluster[region]', ['string']);
        $optionsResolver->addAllowedTypes('bucket[name]', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\ObjectStorageObjectStorageClusterBucketsBucketGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketNotAcceptableException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketInternalServerErrorException
     * @throws \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\ObjectStorageObjectStorageClusterBucketsBucketGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketNotFoundException($response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketNotAcceptableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseObjectInTrashResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketInternalServerErrorException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseMultipleObjectStorageBucketsFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetObjectStorageObjectStorageClusterBucketServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}