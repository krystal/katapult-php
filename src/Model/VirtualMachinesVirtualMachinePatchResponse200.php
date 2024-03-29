<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachinesVirtualMachinePatchResponse200 extends \ArrayObject
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
     * The newly updated virtual machine.
     *
     * @var VirtualMachinesVirtualMachinePatchResponse200VirtualMachine
     */
    protected $virtualMachine;

    /**
     * The newly updated virtual machine.
     */
    public function getVirtualMachine(): VirtualMachinesVirtualMachinePatchResponse200VirtualMachine
    {
        return $this->virtualMachine;
    }

    /**
     * The newly updated virtual machine.
     */
    public function setVirtualMachine(VirtualMachinesVirtualMachinePatchResponse200VirtualMachine $virtualMachine): self
    {
        $this->initialized['virtualMachine'] = true;
        $this->virtualMachine = $virtualMachine;

        return $this;
    }
}
