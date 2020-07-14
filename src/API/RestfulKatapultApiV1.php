<?php

namespace Krystal\Katapult\API;

use GuzzleHttp\Client as GuzzleClient;
use Krystal\Katapult\API\RestfulKatapultApiV1\ResourceController;

class RestfulKatapultApiV1 extends AbstractKatapultApi
{
    const PRODUCTION_ENDPOINT = 'https://api.katapult.io/core/v1/';
    const STAGING_ENDPOINT = 'https://api.katapult.dev/core/v1/';

    /**
     * @var string
     */
    private $authToken;

    /**
     * @var string
     */
    private $endpoint;

    /**
     * @var GuzzleClient
     */
    private $client;

    public function __construct($useProductionEndpoint = false)
    {
        if($useProductionEndpoint)
        {
            $this->setEndpoint(self::PRODUCTION_ENDPOINT);
        }
        else
        {
            $this->setEndpoint(self::STAGING_ENDPOINT);
        }
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @param string $authToken
     */
    public function setAuthenticationToken($authToken)
    {
        $this->authToken = $authToken;
        return $this;
    }

    public function getResourceController($resourceClass, ...$args)
    {
        return ResourceController::make($resourceClass, $this, ...$args);
    }

    /**
     * @return GuzzleClient
     */
    protected function getClient()
    {
        if(!$this->client)
        {
            $this->client = new GuzzleClient([
                'base_uri' => $this->endpoint,
                'timeout' => 2.0,
                'headers' => [
                    'Authorization' => "Bearer {$this->authToken}",
                    //'Content-Type' => 'application/json',
                    'Accepts' => 'application/json',
                    'User-Agent' => 'Katapult-PHP',
                ]
            ]);
        }

        return $this->client;
    }

    public function get($url)
    {
        return $this->getClient()->get($url);
    }

    public function post($url, array $body = [])
    {
        return $this->getClient()->post($url, [
            'json' => $body
        ]);
    }

    public function delete($url)
    {
        return $this->getClient()->delete($url);
    }
}


