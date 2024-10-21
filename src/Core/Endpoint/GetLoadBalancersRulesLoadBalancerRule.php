<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetLoadBalancersRulesLoadBalancerRule extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns details about a load balancer rule
     * ## Scopes
     * - `load_balancers`
     * - `load_balancers:read`.
     *
     * ### OAuth2 Scopes
     * When using OAuth2 authentication, scopes are prefixed with `api.katapult.io/core/v1/`.
     *
     * @param array $queryParameters {
     *                               'load_balancer_rule[id]': string, The load balancer rule to return the details for.
     *
     * All 'load_balancer_rule[]' params are mutually exclusive, only one can be provided.
     * }
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
        return '/load_balancers/rules/load_balancer_rule';
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
        $optionsResolver->setDefined(['load_balancer_rule[id]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('load_balancer_rule[id]', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\LoadBalancersRulesLoadBalancerRuleGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Core\Model\LoadBalancersRulesLoadBalancerRuleGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleBadRequestException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleNotFoundException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseLoadBalancerRuleNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetLoadBalancersRulesLoadBalancerRuleServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\Core\Model\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['OAuth2', 'Authenticator'];
    }
}
