<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class PostDiskDetachPartVirtualMachineDisk extends \ArrayObject
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
     * @var PostDiskDetachPartVirtualMachine
     */
    protected $virtualMachine;
    /**
     * @var bool
     */
    protected $attachOnBoot;
    /**
     * @var bool
     */
    protected $boot;
    /**
     * @var string
     */
    protected $state;

    public function getVirtualMachine(): PostDiskDetachPartVirtualMachine
    {
        return $this->virtualMachine;
    }

    public function setVirtualMachine(PostDiskDetachPartVirtualMachine $virtualMachine): self
    {
        $this->initialized['virtualMachine'] = true;
        $this->virtualMachine = $virtualMachine;

        return $this;
    }

    public function getAttachOnBoot(): bool
    {
        return $this->attachOnBoot;
    }

    public function setAttachOnBoot(bool $attachOnBoot): self
    {
        $this->initialized['attachOnBoot'] = true;
        $this->attachOnBoot = $attachOnBoot;

        return $this;
    }

    public function getBoot(): bool
    {
        return $this->boot;
    }

    public function setBoot(bool $boot): self
    {
        $this->initialized['boot'] = true;
        $this->boot = $boot;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }
}
