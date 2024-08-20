<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class PostDiskUnassign200ResponseDiskIoProfile extends \ArrayObject
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
    protected $permalink;
    /**
     * @var int|null
     */
    protected $speedInMb;
    /**
     * @var int|null
     */
    protected $iops;

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

    public function getPermalink(): string
    {
        return $this->permalink;
    }

    public function setPermalink(string $permalink): self
    {
        $this->initialized['permalink'] = true;
        $this->permalink = $permalink;

        return $this;
    }

    public function getSpeedInMb(): ?int
    {
        return $this->speedInMb;
    }

    public function setSpeedInMb(?int $speedInMb): self
    {
        $this->initialized['speedInMb'] = true;
        $this->speedInMb = $speedInMb;

        return $this;
    }

    public function getIops(): ?int
    {
        return $this->iops;
    }

    public function setIops(?int $iops): self
    {
        $this->initialized['iops'] = true;
        $this->iops = $iops;

        return $this;
    }
}
