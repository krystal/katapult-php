<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Endpoint;

class DeleteSecurityGroupsRulesSecurityGroupRule extends \Krystal\Katapult\KatapultAPI\Runtime\Client\BaseEndpoint implements \Krystal\Katapult\KatapultAPI\Runtime\Client\Endpoint
{
    use \Krystal\Katapult\KatapultAPI\Runtime\Client\EndpointTrait;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\SecurityGroupsRulesSecurityGroupRuleDeleteBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return '/security_groups/rules/:security_group_rule';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Krystal\Katapult\KatapultAPI\Model\SecurityGroupsRulesSecurityGroupRuleDeleteBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \Krystal\Katapult\KatapultAPI\Model\SecurityGroupsRulesSecurityGroupRuleDeleteResponse200|null
     *
     * @throws \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleBadRequestException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleForbiddenException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleNotFoundException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleUnprocessableEntityException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\SecurityGroupsRulesSecurityGroupRuleDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleBadRequestException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleNotFoundException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseSecurityGroupRuleNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleUnprocessableEntityException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseValidationErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\DeleteSecurityGroupsRulesSecurityGroupRuleTooManyRequestsException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}