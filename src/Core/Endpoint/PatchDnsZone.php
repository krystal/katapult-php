<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Endpoint;

class PatchDnsZone extends \KatapultAPI\Core\Runtime\Client\BaseEndpoint implements \KatapultAPI\Core\Runtime\Client\Endpoint
{
    use \KatapultAPI\Core\Runtime\Client\EndpointTrait;

    /**
     * Update properties for a DNS zone
     * ## Scopes
     * - `dns`.
     */
    public function __construct(?\KatapultAPI\Core\Model\DnsZonesDnsZonePatchBody $requestBody = null)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return '/dns_zones/dns_zone';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \KatapultAPI\Core\Model\DnsZonesDnsZonePatchBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Core\Model\DnsZonesDnsZonePatchResponse200|null
     *
     * @throws \KatapultAPI\Core\Exception\PatchDnsZoneBadRequestException
     * @throws \KatapultAPI\Core\Exception\PatchDnsZoneForbiddenException
     * @throws \KatapultAPI\Core\Exception\PatchDnsZoneNotFoundException
     * @throws \KatapultAPI\Core\Exception\PatchDnsZoneUnprocessableEntityException
     * @throws \KatapultAPI\Core\Exception\PatchDnsZoneTooManyRequestsException
     * @throws \KatapultAPI\Core\Exception\PatchDnsZoneServiceUnavailableException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\DnsZonesDnsZonePatchResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PatchDnsZoneBadRequestException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator400Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PatchDnsZoneForbiddenException($response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PatchDnsZoneNotFoundException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseDNSZoneNotFoundResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PatchDnsZoneUnprocessableEntityException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseValidationErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PatchDnsZoneTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Core\Exception\PatchDnsZoneServiceUnavailableException($serializer->deserialize($body, 'KatapultAPI\\Core\\Model\\ResponseAPIAuthenticator503Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['Authenticator'];
    }
}
