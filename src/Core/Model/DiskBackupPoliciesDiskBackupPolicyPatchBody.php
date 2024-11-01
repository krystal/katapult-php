<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DiskBackupPoliciesDiskBackupPolicyPatchBody extends \ArrayObject
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
     * @var DiskBackupPolicyLookup
     */
    protected $diskBackupPolicy;
    /**
     * @var DiskBackupPolicyArguments
     */
    protected $properties;

    public function getDiskBackupPolicy(): DiskBackupPolicyLookup
    {
        return $this->diskBackupPolicy;
    }

    public function setDiskBackupPolicy(DiskBackupPolicyLookup $diskBackupPolicy): self
    {
        $this->initialized['diskBackupPolicy'] = true;
        $this->diskBackupPolicy = $diskBackupPolicy;

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
