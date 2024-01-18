<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DeleteDNSZonesDNSZone200ResponseDNSZone extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $ttl;
    /**
     * @var bool
     */
    protected $verified;
    /**
     * @var bool
     */
    protected $infrastructureZone;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }

    public function setTtl(int $ttl): self
    {
        $this->initialized['ttl'] = true;
        $this->ttl = $ttl;

        return $this;
    }

    public function getVerified(): bool
    {
        return $this->verified;
    }

    public function setVerified(bool $verified): self
    {
        $this->initialized['verified'] = true;
        $this->verified = $verified;

        return $this;
    }

    public function getInfrastructureZone(): bool
    {
        return $this->infrastructureZone;
    }

    public function setInfrastructureZone(bool $infrastructureZone): self
    {
        $this->initialized['infrastructureZone'] = true;
        $this->infrastructureZone = $infrastructureZone;

        return $this;
    }
}
