<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class VirtualMachineBuildDiskArguments extends \ArrayObject
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
    protected $name;
    /**
     * @var int
     */
    protected $sizeInGb;
    /**
     * @var string
     */
    protected $initialFileSystem;
    /**
     * Default false. Exactly one disk must be marked as the system disk.
     *
     * @var bool
     */
    protected $system;
    /**
     * All 'io_profile[]' params are mutually exclusive, only one can be provided.
     *
     * @var DiskIOProfileLookup
     */
    protected $ioProfile;
    /**
     * @var string
     */
    protected $storageSpeed;

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

    public function getSizeInGb(): int
    {
        return $this->sizeInGb;
    }

    public function setSizeInGb(int $sizeInGb): self
    {
        $this->initialized['sizeInGb'] = true;
        $this->sizeInGb = $sizeInGb;

        return $this;
    }

    public function getInitialFileSystem(): string
    {
        return $this->initialFileSystem;
    }

    public function setInitialFileSystem(string $initialFileSystem): self
    {
        $this->initialized['initialFileSystem'] = true;
        $this->initialFileSystem = $initialFileSystem;

        return $this;
    }

    /**
     * Default false. Exactly one disk must be marked as the system disk.
     */
    public function getSystem(): bool
    {
        return $this->system;
    }

    /**
     * Default false. Exactly one disk must be marked as the system disk.
     */
    public function setSystem(bool $system): self
    {
        $this->initialized['system'] = true;
        $this->system = $system;

        return $this;
    }

    /**
     * All 'io_profile[]' params are mutually exclusive, only one can be provided.
     */
    public function getIoProfile(): DiskIOProfileLookup
    {
        return $this->ioProfile;
    }

    /**
     * All 'io_profile[]' params are mutually exclusive, only one can be provided.
     */
    public function setIoProfile(DiskIOProfileLookup $ioProfile): self
    {
        $this->initialized['ioProfile'] = true;
        $this->ioProfile = $ioProfile;

        return $this;
    }

    public function getStorageSpeed(): string
    {
        return $this->storageSpeed;
    }

    public function setStorageSpeed(string $storageSpeed): self
    {
        $this->initialized['storageSpeed'] = true;
        $this->storageSpeed = $storageSpeed;

        return $this;
    }
}
