<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetCountryCountryStates extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Return a list of all country states for a specific country.
     *
     * @param array $queryParameters {
     *
     * @var string $country[id] The country to return states for. All 'country[]' params are mutually exclusive, only one can be provided.
     * @var string $country[iso_code2] The country to return states for. All 'country[]' params are mutually exclusive, only one can be provided.
     * @var string $country[iso_code3] The country to return states for. All 'country[]' params are mutually exclusive, only one can be provided.
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
        return '/countries/country/country_states';
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
        $optionsResolver->setDefined(['country[id]', 'country[iso_code2]', 'country[iso_code3]', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('country[id]', ['string']);
        $optionsResolver->addAllowedTypes('country[iso_code2]', ['string']);
        $optionsResolver->addAllowedTypes('country[iso_code3]', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\CountriesCountryCountryStatesGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetCountryCountryStatesBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetCountryCountryStatesForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetCountryCountryStatesNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetCountryCountryStatesTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetCountryCountryStatesServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\CountriesCountryCountryStatesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetCountryCountryStatesBadRequestException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetCountryCountryStatesForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetCountryCountryStatesNotFoundException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseCountryNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetCountryCountryStatesTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetCountryCountryStatesServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
