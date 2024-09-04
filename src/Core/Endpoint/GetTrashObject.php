<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetTrashObject extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Provides information on a specific trash object
     * ## Scopes
     * - `trash_objects:read`.
     *
     * @param array $queryParameters {
     *
     * @var string $trash_object[id] The trash object to find. All 'trash_object[]' params are mutually exclusive, only one can be provided.
     * @var string $trash_object[object_id] The trash object to find. All 'trash_object[]' params are mutually exclusive, only one can be provided.
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
        return '/trash_objects/trash_object';
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
        $optionsResolver->setDefined(['trash_object[id]', 'trash_object[object_id]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('trash_object[id]', ['string']);
        $optionsResolver->addAllowedTypes('trash_object[object_id]', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\TrashObjectsTrashObjectGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetTrashObjectBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetTrashObjectForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetTrashObjectNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetTrashObjectTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetTrashObjectServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\TrashObjectsTrashObjectGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetTrashObjectBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetTrashObjectForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetTrashObjectNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseTrashObjectNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetTrashObjectTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetTrashObjectServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
