<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Endpoint;

class GetOrganizationUsersWithAccess extends \Krystal\Katapult\KatapultAPI\Runtime\Client\BaseEndpoint implements \Krystal\Katapult\KatapultAPI\Runtime\Client\Endpoint
{
    use \Krystal\Katapult\KatapultAPI\Runtime\Client\EndpointTrait;

    /**
     * This will return a simple list of users with any access to this organization. This
     * endpoint is available to all users with access to the organization therefore allows
     * them to see a small amount of information about their peers. This is useful when
     * combined with other API actions that require the ID of a fellow user (such as when
     * determining which users to assign a virtual machine).
     *
     * @param array $queryParameters {
     *
     * @var string $organization[id] All 'organization[]' params are mutually exclusive, only one can be provided
     * @var string $organization[sub_domain] All 'organization[]' params are mutually exclusive, only one can be provided
     * @var int    $page
     * @var int    $per_page
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
        return '/organizations/organization/users_with_access';
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
        $optionsResolver->setDefined(['organization[id]', 'organization[sub_domain]', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('organization[id]', ['string']);
        $optionsResolver->addAllowedTypes('organization[sub_domain]', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \Krystal\Katapult\KatapultAPI\Model\OrganizationsOrganizationUsersWithAccessGetResponse200|null
     *
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessBadRequestException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessForbiddenException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessNotFoundException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessTooManyRequestsException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\OrganizationsOrganizationUsersWithAccessGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessBadRequestException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessNotFoundException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseOrganizationNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessTooManyRequestsException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetOrganizationUsersWithAccessServiceUnavailableException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
