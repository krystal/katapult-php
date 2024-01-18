<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DisksDiskDiskBackupPoliciesPostResponse200 extends \ArrayObject
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
     * The new disk backup policy that has been created.
     *
     * @var DisksDiskDiskBackupPoliciesPostResponse200DiskBackupPolicy
     */
    protected $diskBackupPolicy;

    /**
     * The new disk backup policy that has been created.
     */
    public function getDiskBackupPolicy(): DisksDiskDiskBackupPoliciesPostResponse200DiskBackupPolicy
    {
        return $this->diskBackupPolicy;
    }

    /**
     * The new disk backup policy that has been created.
     */
    public function setDiskBackupPolicy(DisksDiskDiskBackupPoliciesPostResponse200DiskBackupPolicy $diskBackupPolicy): self
    {
        $this->initialized['diskBackupPolicy'] = true;
        $this->diskBackupPolicy = $diskBackupPolicy;

        return $this;
    }
}
