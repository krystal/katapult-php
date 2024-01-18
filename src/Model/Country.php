<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class Country extends \ArrayObject
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
     * @var string
     */
    protected $isoCode2;
    /**
     * @var string
     */
    protected $isoCode3;
    /**
     * @var string
     */
    protected $timeZone;
    /**
     * @var bool
     */
    protected $eu;

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

    public function getIsoCode2(): string
    {
        return $this->isoCode2;
    }

    public function setIsoCode2(string $isoCode2): self
    {
        $this->initialized['isoCode2'] = true;
        $this->isoCode2 = $isoCode2;

        return $this;
    }

    public function getIsoCode3(): string
    {
        return $this->isoCode3;
    }

    public function setIsoCode3(string $isoCode3): self
    {
        $this->initialized['isoCode3'] = true;
        $this->isoCode3 = $isoCode3;

        return $this;
    }

    public function getTimeZone(): string
    {
        return $this->timeZone;
    }

    public function setTimeZone(string $timeZone): self
    {
        $this->initialized['timeZone'] = true;
        $this->timeZone = $timeZone;

        return $this;
    }

    public function getEu(): bool
    {
        return $this->eu;
    }

    public function setEu(bool $eu): self
    {
        $this->initialized['eu'] = true;
        $this->eu = $eu;

        return $this;
    }
}
