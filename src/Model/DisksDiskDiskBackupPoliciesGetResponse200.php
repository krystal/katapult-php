<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DisksDiskDiskBackupPoliciesGetResponse200 extends \ArrayObject
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
     * @var DisksDiskDiskBackupPoliciesGetResponse200Pagination
     */
    protected $pagination;
    /**
     * The disk backup policies for the provided disk.
     *
     * @var GetDiskDiskBackupPolicies200ResponseDiskBackupPolicies[]
     */
    protected $diskBackupPolicies;

    public function getPagination(): DisksDiskDiskBackupPoliciesGetResponse200Pagination
    {
        return $this->pagination;
    }

    public function setPagination(DisksDiskDiskBackupPoliciesGetResponse200Pagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * The disk backup policies for the provided disk.
     *
     * @return GetDiskDiskBackupPolicies200ResponseDiskBackupPolicies[]
     */
    public function getDiskBackupPolicies(): array
    {
        return $this->diskBackupPolicies;
    }

    /**
     * The disk backup policies for the provided disk.
     *
     * @param GetDiskDiskBackupPolicies200ResponseDiskBackupPolicies[] $diskBackupPolicies
     */
    public function setDiskBackupPolicies(array $diskBackupPolicies): self
    {
        $this->initialized['diskBackupPolicies'] = true;
        $this->diskBackupPolicies = $diskBackupPolicies;

        return $this;
    }
}
