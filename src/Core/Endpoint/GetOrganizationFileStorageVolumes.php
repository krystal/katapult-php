<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetOrganizationFileStorageVolumes extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns a list of all file storage volumes for a given organization
     * ## Scopes
     * - `file_storage_volumes`
     * - `file_storage_volumes:read`.
     *
     * @param array $queryParameters {
     *                               'organization[id]': string, The organization to return all file storage volumes for. All 'organization[]' params are mutually exclusive, only one can be provided.
     *                               'organization[sub_domain]': string, The organization to return all file storage volumes for. All 'organization[]' params are mutually exclusive, only one can be provided.
     *                               'annotations[key]': string, An array of annotations to filter by. All 'annotations[]' params are mutually exclusive, only one can be provided.
     *                               'annotations[value]': string, An array of annotations to filter by. All 'annotations[]' params are mutually exclusive, only one can be provided.
     *                               'page': int,
     *                               'per_page': int,
     *                               }
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
        return '/organizations/organization/file_storage_volumes';
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
        $optionsResolver->setDefined(['organization[id]', 'organization[sub_domain]', 'annotations[key]', 'annotations[value]', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('organization[id]', ['string']);
        $optionsResolver->addAllowedTypes('organization[sub_domain]', ['string']);
        $optionsResolver->addAllowedTypes('annotations[key]', ['string']);
        $optionsResolver->addAllowedTypes('annotations[value]', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\OrganizationsOrganizationFileStorageVolumesGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\OrganizationsOrganizationFileStorageVolumesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseOrganizationNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetOrganizationFileStorageVolumesServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
