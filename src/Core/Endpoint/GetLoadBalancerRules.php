<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetLoadBalancerRules extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns a list of all rules for a given load balancer
     * ## Scopes
     * - `load_balancers`
     * - `load_balancers:read`.
     *
     * @param array $queryParameters {
     *
     * @var string $load_balancer[id] The load balancer to return all load rules for. All 'load_balancer[]' params are mutually exclusive, only one can be provided.
     * @var string $load_balancer[api_reference] The load balancer to return all load rules for. All 'load_balancer[]' params are mutually exclusive, only one can be provided.
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
        return '/load_balancers/load_balancer/rules';
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
        $optionsResolver->setDefined(['load_balancer[id]', 'load_balancer[api_reference]', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('load_balancer[id]', ['string']);
        $optionsResolver->addAllowedTypes('load_balancer[api_reference]', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\LoadBalancersLoadBalancerRulesGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerRulesBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerRulesForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerRulesNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerRulesTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancerRulesServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\LoadBalancersLoadBalancerRulesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerRulesBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerRulesForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerRulesNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseLoadBalancerNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerRulesTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancerRulesServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
