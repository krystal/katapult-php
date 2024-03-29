<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class FileStorageVolumesFileStorageVolumePatchBody extends \ArrayObject
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
     * All 'file_storage_volume[]' params are mutually exclusive, only one can be provided.
     *
     * @var FileStorageVolumeLookup
     */
    protected $fileStorageVolume;
    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     *
     * @var FileStorageVolumeArguments
     */
    protected $properties;

    /**
     * All 'file_storage_volume[]' params are mutually exclusive, only one can be provided.
     */
    public function getFileStorageVolume(): FileStorageVolumeLookup
    {
        return $this->fileStorageVolume;
    }

    /**
     * All 'file_storage_volume[]' params are mutually exclusive, only one can be provided.
     */
    public function setFileStorageVolume(FileStorageVolumeLookup $fileStorageVolume): self
    {
        $this->initialized['fileStorageVolume'] = true;
        $this->fileStorageVolume = $fileStorageVolume;

        return $this;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function getProperties(): FileStorageVolumeArguments
    {
        return $this->properties;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function setProperties(FileStorageVolumeArguments $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

        return $this;
    }
}
