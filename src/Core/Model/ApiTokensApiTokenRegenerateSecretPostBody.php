<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class ApiTokensApiTokenRegenerateSecretPostBody extends \ArrayObject
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
     * @var APITokenLookup
     */
    protected $apiToken;

    public function getApiToken(): APITokenLookup
    {
        return $this->apiToken;
    }

    public function setApiToken(APITokenLookup $apiToken): self
    {
        $this->initialized['apiToken'] = true;
        $this->apiToken = $apiToken;

        return $this;
    }
}
