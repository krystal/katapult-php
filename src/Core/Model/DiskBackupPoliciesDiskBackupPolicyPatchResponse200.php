<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DiskBackupPoliciesDiskBackupPolicyPatchResponse200 extends \ArrayObject
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
     * The disk backup policy that has been updated.
     *
     * @var DiskBackupPoliciesDiskBackupPolicyPatchResponse200DiskBackupPolicy
     */
    protected $diskBackupPolicy;

    /**
     * The disk backup policy that has been updated.
     */
    public function getDiskBackupPolicy(): DiskBackupPoliciesDiskBackupPolicyPatchResponse200DiskBackupPolicy
    {
        return $this->diskBackupPolicy;
    }

    /**
     * The disk backup policy that has been updated.
     */
    public function setDiskBackupPolicy(DiskBackupPoliciesDiskBackupPolicyPatchResponse200DiskBackupPolicy $diskBackupPolicy): self
    {
        $this->initialized['diskBackupPolicy'] = true;
        $this->diskBackupPolicy = $diskBackupPolicy;

        return $this;
    }
}
