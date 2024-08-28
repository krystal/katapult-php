<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DisksDiskPatchResponse200 extends \ArrayObject
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
     * The disk that has been updated.
     *
     * @var DisksDiskPatchResponse200Disk
     */
    protected $disk;

    /**
     * The disk that has been updated.
     */
    public function getDisk(): DisksDiskPatchResponse200Disk
    {
        return $this->disk;
    }

    /**
     * The disk that has been updated.
     */
    public function setDisk(DisksDiskPatchResponse200Disk $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;

        return $this;
    }
}