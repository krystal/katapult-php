<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachinesVirtualMachineAllocateIpPostBody extends \ArrayObject
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
     * All 'virtual_machine[]' params are mutually exclusive, only one can be provided.
     *
     * @var VirtualMachineLookup
     */
    protected $virtualMachine;
    /**
     * All 'ip_address[]' params are mutually exclusive, only one can be provided.
     *
     * @var IPAddressLookup
     */
    protected $ipAddress;

    /**
     * All 'virtual_machine[]' params are mutually exclusive, only one can be provided.
     */
    public function getVirtualMachine(): VirtualMachineLookup
    {
        return $this->virtualMachine;
    }

    /**
     * All 'virtual_machine[]' params are mutually exclusive, only one can be provided.
     */
    public function setVirtualMachine(VirtualMachineLookup $virtualMachine): self
    {
        $this->initialized['virtualMachine'] = true;
        $this->virtualMachine = $virtualMachine;

        return $this;
    }

    /**
     * All 'ip_address[]' params are mutually exclusive, only one can be provided.
     */
    public function getIpAddress(): IPAddressLookup
    {
        return $this->ipAddress;
    }

    /**
     * All 'ip_address[]' params are mutually exclusive, only one can be provided.
     */
    public function setIpAddress(IPAddressLookup $ipAddress): self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;

        return $this;
    }
}
