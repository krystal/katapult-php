<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class ObjectStorageObjectPresignedURLArguments extends \ArrayObject
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
     * The number of seconds the url should be valid for.
     *
     * @var int
     */
    protected $expirySeconds;

    /**
     * The number of seconds the url should be valid for.
     */
    public function getExpirySeconds(): int
    {
        return $this->expirySeconds;
    }

    /**
     * The number of seconds the url should be valid for.
     */
    public function setExpirySeconds(int $expirySeconds): self
    {
        $this->initialized['expirySeconds'] = true;
        $this->expirySeconds = $expirySeconds;

        return $this;
    }
}
