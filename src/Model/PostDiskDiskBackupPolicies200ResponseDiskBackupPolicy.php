<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class PostDiskDiskBackupPolicies200ResponseDiskBackupPolicy extends \ArrayObject
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
     * @var int
     */
    protected $retention;
    /**
     * @var float
     */
    protected $totalSize;
    /**
     * @var DiskBackupPolicyTarget
     */
    protected $target;
    /**
     * @var PostDiskDiskBackupPoliciesPartSchedule
     */
    protected $schedule;
    /**
     * @var int|null
     */
    protected $autoMoveToTrashAt;

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

    public function getRetention(): int
    {
        return $this->retention;
    }

    public function setRetention(int $retention): self
    {
        $this->initialized['retention'] = true;
        $this->retention = $retention;

        return $this;
    }

    public function getTotalSize(): float
    {
        return $this->totalSize;
    }

    public function setTotalSize(float $totalSize): self
    {
        $this->initialized['totalSize'] = true;
        $this->totalSize = $totalSize;

        return $this;
    }

    public function getTarget(): DiskBackupPolicyTarget
    {
        return $this->target;
    }

    public function setTarget(DiskBackupPolicyTarget $target): self
    {
        $this->initialized['target'] = true;
        $this->target = $target;

        return $this;
    }

    public function getSchedule(): PostDiskDiskBackupPoliciesPartSchedule
    {
        return $this->schedule;
    }

    public function setSchedule(PostDiskDiskBackupPoliciesPartSchedule $schedule): self
    {
        $this->initialized['schedule'] = true;
        $this->schedule = $schedule;

        return $this;
    }

    public function getAutoMoveToTrashAt(): ?int
    {
        return $this->autoMoveToTrashAt;
    }

    public function setAutoMoveToTrashAt(?int $autoMoveToTrashAt): self
    {
        $this->initialized['autoMoveToTrashAt'] = true;
        $this->autoMoveToTrashAt = $autoMoveToTrashAt;

        return $this;
    }
}
