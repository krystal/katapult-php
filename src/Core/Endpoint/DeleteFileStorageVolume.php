<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class DeleteFileStorageVolume extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Delete a file storage volume.
     * ## Scopes
     * - `file_storage_volumes`.
     */
    public function __construct(?\KatapultAPI\Core\Model\FileStorageVolumesFileStorageVolumeDeleteBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return '/file_storage_volumes/file_storage_volume';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \KatapultAPI\Core\Model\FileStorageVolumesFileStorageVolumeDeleteBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Core\Model\FileStorageVolumesFileStorageVolumeDeleteResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\DeleteFileStorageVolumeBadRequestException
     * @throws \KatapultAPI\Core\Exception\DeleteFileStorageVolumeForbiddenException
     * @throws \KatapultAPI\Core\Exception\DeleteFileStorageVolumeNotFoundException
     * @throws \KatapultAPI\Core\Exception\DeleteFileStorageVolumeNotAcceptableException
     * @throws \KatapultAPI\Core\Exception\DeleteFileStorageVolumeUnprocessableEntityException
     * @throws \KatapultAPI\Core\Exception\DeleteFileStorageVolumeTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\DeleteFileStorageVolumeServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\FileStorageVolumesFileStorageVolumeDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteFileStorageVolumeBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteFileStorageVolumeForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteFileStorageVolumeNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseFileStorageVolumeNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteFileStorageVolumeNotAcceptableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseObjectInTrashResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteFileStorageVolumeUnprocessableEntityException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseValidationErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteFileStorageVolumeTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\DeleteFileStorageVolumeServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
