<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DisksDiskUnassignPostResponse200 extends \ArrayObject
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
     * The disk that has been unassigned from a virtual machine.
     *
     * @var DisksDiskUnassignPostResponse200Disk
     */
    protected $disk;

    /**
     * The disk that has been unassigned from a virtual machine.
     */
    public function getDisk(): DisksDiskUnassignPostResponse200Disk
    {
        return $this->disk;
    }

    /**
     * The disk that has been unassigned from a virtual machine.
     */
    public function setDisk(DisksDiskUnassignPostResponse200Disk $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;

        return $this;
    }
}
