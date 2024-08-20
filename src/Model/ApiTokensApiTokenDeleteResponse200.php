<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class ApiTokensApiTokenDeleteResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The API token that has been destroyed.
     *
     * @var ApiTokensApiTokenDeleteResponse200ApiToken
     */
    protected $apiToken;

    /**
     * The API token that has been destroyed.
     */
    public function getApiToken(): ApiTokensApiTokenDeleteResponse200ApiToken
    {
        return $this->apiToken;
    }

    /**
     * The API token that has been destroyed.
     */
    public function setApiToken(ApiTokensApiTokenDeleteResponse200ApiToken $apiToken): self
    {
        $this->initialized['apiToken'] = true;
        $this->apiToken = $apiToken;

        return $this;
    }
}
