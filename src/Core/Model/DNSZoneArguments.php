<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DNSZoneArguments extends \ArrayObject
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
     * The name of the zone (only available for creation).
     *
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $defaultTtl;

    /**
     * The name of the zone (only available for creation).
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the zone (only available for creation).
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getDefaultTtl(): int
    {
        return $this->defaultTtl;
    }

    public function setDefaultTtl(int $defaultTtl): self
    {
        $this->initialized['defaultTtl'] = true;
        $this->defaultTtl = $defaultTtl;

        return $this;
    }
}
