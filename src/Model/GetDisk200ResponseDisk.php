<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class GetDisk200ResponseDisk extends \ArrayObject
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
    protected $sizeInGb;
    /**
     * @var string
     */
    protected $wwn;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $storageSpeed;
    /**
     * @var GetDisk200ResponseDiskIoProfile|null
     */
    protected $ioProfile;
    /**
     * @var GetDisk200ResponseDiskVirtualMachineDisk|null
     */
    protected $virtualMachineDisk;
    /**
     * @var GetDisk200ResponseDiskInstallation|null
     */
    protected $installation;

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

    public function getWwn(): string
    {
        return $this->wwn;
    }

    public function setWwn(string $wwn): self
    {
        $this->initialized['wwn'] = true;
        $this->wwn = $wwn;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

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

    public function getIoProfile(): ?GetDisk200ResponseDiskIoProfile
    {
        return $this->ioProfile;
    }

    public function setIoProfile(?GetDisk200ResponseDiskIoProfile $ioProfile): self
    {
        $this->initialized['ioProfile'] = true;
        $this->ioProfile = $ioProfile;

        return $this;
    }

    public function getVirtualMachineDisk(): ?GetDisk200ResponseDiskVirtualMachineDisk
    {
        return $this->virtualMachineDisk;
    }

    public function setVirtualMachineDisk(?GetDisk200ResponseDiskVirtualMachineDisk $virtualMachineDisk): self
    {
        $this->initialized['virtualMachineDisk'] = true;
        $this->virtualMachineDisk = $virtualMachineDisk;

        return $this;
    }

    public function getInstallation(): ?GetDisk200ResponseDiskInstallation
    {
        return $this->installation;
    }

    public function setInstallation(?GetDisk200ResponseDiskInstallation $installation): self
    {
        $this->initialized['installation'] = true;
        $this->installation = $installation;

        return $this;
    }
}
