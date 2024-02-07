<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DeleteFileStorageVolume200ResponseFileStorageVolume extends \ArrayObject
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
     * @var DeleteFileStorageVolumePartDataCenter
     */
    protected $dataCenter;
    /**
     * @var string[]
     */
    protected $associations;
    /**
     * @var string
     */
    protected $state;
    /**
     * The NFS location of where to mount the volume from.
     *
     * @var string|null
     */
    protected $nfsLocation;
    /**
     * The size of the volume in bytes.
     *
     * @var int|null
     */
    protected $size;

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

    public function getDataCenter(): DeleteFileStorageVolumePartDataCenter
    {
        return $this->dataCenter;
    }

    public function setDataCenter(DeleteFileStorageVolumePartDataCenter $dataCenter): self
    {
        $this->initialized['dataCenter'] = true;
        $this->dataCenter = $dataCenter;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAssociations(): array
    {
        return $this->associations;
    }

    /**
     * @param string[] $associations
     */
    public function setAssociations(array $associations): self
    {
        $this->initialized['associations'] = true;
        $this->associations = $associations;

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

    /**
     * The NFS location of where to mount the volume from.
     */
    public function getNfsLocation(): ?string
    {
        return $this->nfsLocation;
    }

    /**
     * The NFS location of where to mount the volume from.
     */
    public function setNfsLocation(?string $nfsLocation): self
    {
        $this->initialized['nfsLocation'] = true;
        $this->nfsLocation = $nfsLocation;

        return $this;
    }

    /**
     * The size of the volume in bytes.
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * The size of the volume in bytes.
     */
    public function setSize(?int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;

        return $this;
    }
}
