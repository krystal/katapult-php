<?php

namespace Krystal\Katapult\API;

use GuzzleHttp\Client as GuzzleClient;
use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;
use Psr\Http\Message\ResponseInterface;

class RestfulKatapultApiV1 extends AbstractKatapultApi
{
    const PRODUCTION_ENDPOINT = 'https://api.katapult.io/core/v1/';
    const STAGING_ENDPOINT = 'https://api.katapult.dev/core/v1/';

    private string $authToken;
    private string $endpoint;
    private GuzzleClient $client;

    public function __construct(string $authToken, $useProductionEndpoint = true)
    {
        $this
            ->setEndpoint($useProductionEndpoint ? self::PRODUCTION_ENDPOINT : self::STAGING_ENDPOINT, false)
            ->setAuthenticationToken($authToken, false)
            ->rebuildClient();
    }

    public function rebuildClient(): RestfulKatapultApiV1
    {
        $this->client = new GuzzleClient([
            'base_uri' => $this->endpoint,
            'timeout' => 5.0,
            'headers' => [
                'Authorization' => "Bearer {$this->authToken}",
                'Accepts' => 'application/json',
                'User-Agent' => 'Katapult-PHP',
            ]
        ]);

        return $this;
    }

    public function setEndpoint(string $endpoint, bool $rebuildClient = true): RestfulKatapultApiV1
    {
        $this->endpoint = $endpoint;

        if ($rebuildClient) {
            $this->rebuildClient();
        }

        return $this;
    }

    public function setAuthenticationToken(string $authToken, bool $rebuildClient = true): RestfulKatapultApiV1
    {
        $this->authToken = $authToken;

        if ($rebuildClient) {
            $this->rebuildClient();
        }

        return $this;
    }

    public function getResourceController($resourceClass, ...$args): ResourceController
    {
        return ResourceController::make($resourceClass, $this, ...$args);
    }

    public function get($url): ResponseInterface
    {
        return $this->client->get($url);
    }

    public function post($url, array $body = []): ResponseInterface
    {
        $body['php_nonce'] = md5(microtime());

        return $this->client->post($url, [
            'json' => $body
        ]);
    }

    public function put($url, array $body = []): ResponseInterface
    {
        return $this->client->put($url, [
            'json' => $body
        ]);
    }

    public function delete($url): ResponseInterface
    {
        return $this->client->delete($url);
    }
}
