<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Endpoint;

class GetVirtualMachineAuthorizedKeys extends \Krystal\Katapult\KatapultAPI\Runtime\Client\BaseEndpoint implements \Krystal\Katapult\KatapultAPI\Runtime\Client\Endpoint
{
    use \Krystal\Katapult\KatapultAPI\Runtime\Client\EndpointTrait;
    protected $accept;

    /**
     * @param array $accept Accept content header text/plain|application/json
     */
    public function __construct(array $accept = [])
    {
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/virtual_machine/authorized_keys';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['text/plain', 'application/json']];
        }

        return $this->accept;
    }

    /**
     * @return null
     *
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineAuthorizedKeysBadRequestException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineAuthorizedKeysForbiddenException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineAuthorizedKeysNotFoundException
     * @throws \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineAuthorizedKeysTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineAuthorizedKeysBadRequestException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineAuthorizedKeysForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineAuthorizedKeysNotFoundException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseNoVirtualMachineForAPITokenResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Krystal\Katapult\KatapultAPI\Exception\GetVirtualMachineAuthorizedKeysTooManyRequestsException($serializer->deserialize($body, 'Krystal\\Katapult\\KatapultAPI\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
