<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class GetSecurityGroupsRulesSecurityGroupRule extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Returns details about a security group rule
     * ## Scopes
     * - `security_groups`
     * - `security_groups:read`.
     *
     * @param array $queryParameters {
     *
     * @var string $security_group_rule[id] The security group rule to return the details for. All 'security_group_rule[]' params are mutually exclusive, only one can be provided.
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
        return '/security_groups/rules/security_group_rule';
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
        $optionsResolver->setDefined(['security_group_rule[id]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('security_group_rule[id]', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \KatapultAPI\Core\Model\SecurityGroupsRulesSecurityGroupRuleGetResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleBadRequestException
     * @throws \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleForbiddenException
     * @throws \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleNotFoundException
     * @throws \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\SecurityGroupsRulesSecurityGroupRuleGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleBadRequestException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleNotFoundException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseSecurityGroupRuleNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\GetSecurityGroupsRulesSecurityGroupRuleServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}