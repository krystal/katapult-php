<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DisksDiskDiskBackupPoliciesPostBody extends \ArrayObject
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
     * @var DiskLookup
     */
    protected $disk;
    /**
     * @var DiskBackupPolicyArguments
     */
    protected $properties;

    public function getDisk(): DiskLookup
    {
        return $this->disk;
    }

    public function setDisk(DiskLookup $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;

        return $this;
    }

    public function getProperties(): DiskBackupPolicyArguments
    {
        return $this->properties;
    }

    public function setProperties(DiskBackupPolicyArguments $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

        return $this;
    }
}
