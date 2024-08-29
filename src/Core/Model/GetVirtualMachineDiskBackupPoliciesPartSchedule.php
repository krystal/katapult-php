<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class GetVirtualMachineDiskBackupPoliciesPartSchedule extends \ArrayObject
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
    protected $interval;
    /**
     * @var int
     */
    protected $nextInvocationAt;

    public function getInterval(): string
    {
        return $this->interval;
    }

    public function setInterval(string $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;

        return $this;
    }

    public function getNextInvocationAt(): int
    {
        return $this->nextInvocationAt;
    }

    public function setNextInvocationAt(int $nextInvocationAt): self
    {
        $this->initialized['nextInvocationAt'] = true;
        $this->nextInvocationAt = $nextInvocationAt;

        return $this;
    }
}