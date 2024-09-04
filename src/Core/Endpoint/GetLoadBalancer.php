<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetLoadBalancer extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns details about a load balancer
     * ## Scopes
     * - `load_balancers`
     * - `load_balancers:read`.
     *
     * @param array $queryParameters {
     *                               'load_balancer[id]': string, The load balancer to return the details for. All 'load_balancer[]' params are mutually exclusive, only one can be provided.
     *                               'load_balancer[api_reference]': string, The load balancer to return the details for. All 'load_balancer[]' params are mutually exclusive, only one can be provided.
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
        return '/load_balancers/load_balancer';
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
        $optionsResolver->setDefined(['load_balancer[id]', 'load_balancer[api_reference]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('load_balancer[id]', ['string']);
        $optionsResolver->addAllowedTypes('load_balancer[api_reference]', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\LoadBalancersLoadBalancerGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\LoadBalancersLoadBalancerGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseLoadBalancerNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
