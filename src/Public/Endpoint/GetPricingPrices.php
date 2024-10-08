<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Endpoint;

class GetPricingPrices extends \KatapultAPI\Public\Runtime\Client\BaseEndpoint implements \KatapultAPI\Public\Runtime\Client\Endpoint
{
    use \KatapultAPI\Public\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/pricing/prices';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \KatapultAPI\Public\Model\PricingPricesGetResponse200|null
     *
     * @throws \KatapultAPI\Public\Exception\GetPricingPricesForbiddenException
     * @throws \KatapultAPI\Public\Exception\GetPricingPricesTooManyRequestsException
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KatapultAPI\Public\Model\PricingPricesGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Public\Exception\GetPricingPricesForbiddenException($serializer->deserialize($body, 'KatapultAPI\Public\Model\ResponseAPIAuthenticator403Response', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \KatapultAPI\Public\Exception\GetPricingPricesTooManyRequestsException($serializer->deserialize($body, 'KatapultAPI\Public\Model\ResponseAPIAuthenticator429Response', 'json'), $response);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
