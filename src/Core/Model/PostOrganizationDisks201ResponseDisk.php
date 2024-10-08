<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class PostOrganizationDisks201ResponseDisk extends \ArrayObject
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
     * @var PostOrganizationDisks201ResponseDiskIoProfile|null
     */
    protected $ioProfile;
    /**
     * @var string|null
     */
    protected $busType;
    /**
     * @var PostOrganizationDisksPartDataCenter
     */
    protected $dataCenter;
    /**
     * @var PostOrganizationDisks201ResponseDiskVirtualMachineDisk|null
     */
    protected $virtualMachineDisk;
    /**
     * @var PostOrganizationDisks201ResponseDiskInstallation|null
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

    public function getIoProfile(): ?PostOrganizationDisks201ResponseDiskIoProfile
    {
        return $this->ioProfile;
    }

    public function setIoProfile(?PostOrganizationDisks201ResponseDiskIoProfile $ioProfile): self
    {
        $this->initialized['ioProfile'] = true;
        $this->ioProfile = $ioProfile;

        return $this;
    }

    public function getBusType(): ?string
    {
        return $this->busType;
    }

    public function setBusType(?string $busType): self
    {
        $this->initialized['busType'] = true;
        $this->busType = $busType;

        return $this;
    }

    public function getDataCenter(): PostOrganizationDisksPartDataCenter
    {
        return $this->dataCenter;
    }

    public function setDataCenter(PostOrganizationDisksPartDataCenter $dataCenter): self
    {
        $this->initialized['dataCenter'] = true;
        $this->dataCenter = $dataCenter;

        return $this;
    }

    public function getVirtualMachineDisk(): ?PostOrganizationDisks201ResponseDiskVirtualMachineDisk
    {
        return $this->virtualMachineDisk;
    }

    public function setVirtualMachineDisk(?PostOrganizationDisks201ResponseDiskVirtualMachineDisk $virtualMachineDisk): self
    {
        $this->initialized['virtualMachineDisk'] = true;
        $this->virtualMachineDisk = $virtualMachineDisk;

        return $this;
    }

    public function getInstallation(): ?PostOrganizationDisks201ResponseDiskInstallation
    {
        return $this->installation;
    }

    public function setInstallation(?PostOrganizationDisks201ResponseDiskInstallation $installation): self
    {
        $this->initialized['installation'] = true;
        $this->installation = $installation;

        return $this;
    }
}
