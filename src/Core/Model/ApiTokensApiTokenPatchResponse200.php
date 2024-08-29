<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class ApiTokensApiTokenPatchResponse200 extends \ArrayObject
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
     * The API token that has been updated.
     *
     * @var ApiTokensApiTokenPatchResponse200ApiToken
     */
    protected $apiToken;
    /**
     * Annotations for this API token.
     *
     * @var list<KeyValue>
     */
    protected $annotations;

    /**
     * The API token that has been updated.
     */
    public function getApiToken(): ApiTokensApiTokenPatchResponse200ApiToken
    {
        return $this->apiToken;
    }

    /**
     * The API token that has been updated.
     */
    public function setApiToken(ApiTokensApiTokenPatchResponse200ApiToken $apiToken): self
    {
        $this->initialized['apiToken'] = true;
        $this->apiToken = $apiToken;

        return $this;
    }

    /**
     * Annotations for this API token.
     *
     * @return list<KeyValue>
     */
    public function getAnnotations(): array
    {
        return $this->annotations;
    }

    /**
     * Annotations for this API token.
     *
     * @param list<KeyValue> $annotations
     */
    public function setAnnotations(array $annotations): self
    {
        $this->initialized['annotations'] = true;
        $this->annotations = $annotations;

        return $this;
    }
}