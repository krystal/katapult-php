<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class RateLimitReached extends \ArrayObject
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
     * The total number of requests per minute that are permitted.
     *
     * @var int
     */
    protected $totalPermitted;

    /**
     * The total number of requests per minute that are permitted.
     */
    public function getTotalPermitted(): int
    {
        return $this->totalPermitted;
    }

    /**
     * The total number of requests per minute that are permitted.
     */
    public function setTotalPermitted(int $totalPermitted): self
    {
        $this->initialized['totalPermitted'] = true;
        $this->totalPermitted = $totalPermitted;

        return $this;
    }
}