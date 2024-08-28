<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class ApiTokensApiTokenPatchBody extends \ArrayObject
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
     * All 'api_token[]' params are mutually exclusive, only one can be provided.
     *
     * @var APITokenLookup
     */
    protected $apiToken;
    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     *
     * @var APITokenArguments
     */
    protected $properties;

    /**
     * All 'api_token[]' params are mutually exclusive, only one can be provided.
     */
    public function getApiToken(): APITokenLookup
    {
        return $this->apiToken;
    }

    /**
     * All 'api_token[]' params are mutually exclusive, only one can be provided.
     */
    public function setApiToken(APITokenLookup $apiToken): self
    {
        $this->initialized['apiToken'] = true;
        $this->apiToken = $apiToken;

        return $this;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function getProperties(): APITokenArguments
    {
        return $this->properties;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function setProperties(APITokenArguments $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

        return $this;
    }
}