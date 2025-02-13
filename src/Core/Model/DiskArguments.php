<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DiskArguments extends \ArrayObject
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
     * @var string
     */
    protected $busType;
    /**
     * All 'data_center[]' params are mutually exclusive, only one can be provided.
     *
     * @var DataCenterLookup
     */
    protected $dataCenter;
    /**
     * Only available when creating disk. Existing disks must use the resize endpoint.
     *
     * @var int
     */
    protected $sizeInGb;
    /**
     * All 'io_profile[]' params are mutually exclusive, only one can be provided.
     *
     * @var DiskIOProfileLookup
     */
    protected $ioProfile;
    /**
     * @var string
     */
    protected $initialFileSystem;
    /**
     * @var string
     */
    protected $storageSpeed;
    /**
     * @var VirtualMachineDiskArguments
     */
    protected $virtualMachineDisk;

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

    public function getBusType(): string
    {
        return $this->busType;
    }

    public function setBusType(string $busType): self
    {
        $this->initialized['busType'] = true;
        $this->busType = $busType;

        return $this;
    }

    /**
     * All 'data_center[]' params are mutually exclusive, only one can be provided.
     */
    public function getDataCenter(): DataCenterLookup
    {
        return $this->dataCenter;
    }

    /**
     * All 'data_center[]' params are mutually exclusive, only one can be provided.
     */
    public function setDataCenter(DataCenterLookup $dataCenter): self
    {
        $this->initialized['dataCenter'] = true;
        $this->dataCenter = $dataCenter;

        return $this;
    }

    /**
     * Only available when creating disk. Existing disks must use the resize endpoint.
     */
    public function getSizeInGb(): int
    {
        return $this->sizeInGb;
    }

    /**
     * Only available when creating disk. Existing disks must use the resize endpoint.
     */
    public function setSizeInGb(int $sizeInGb): self
    {
        $this->initialized['sizeInGb'] = true;
        $this->sizeInGb = $sizeInGb;

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

    public function getVirtualMachineDisk(): VirtualMachineDiskArguments
    {
        return $this->virtualMachineDisk;
    }

    public function setVirtualMachineDisk(VirtualMachineDiskArguments $virtualMachineDisk): self
    {
        $this->initialized['virtualMachineDisk'] = true;
        $this->virtualMachineDisk = $virtualMachineDisk;

        return $this;
    }
}
