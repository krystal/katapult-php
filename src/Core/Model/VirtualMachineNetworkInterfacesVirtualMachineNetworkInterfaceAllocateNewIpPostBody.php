<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAllocateNewIpPostBody extends \ArrayObject
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
     * All 'virtual_machine_network_interface[]' params are mutually exclusive, only one can be provided.
     *
     * @var VirtualMachineNetworkInterfaceLookup
     */
    protected $virtualMachineNetworkInterface;
    /**
     * @var string
     */
    protected $addressVersion;

    /**
     * All 'virtual_machine_network_interface[]' params are mutually exclusive, only one can be provided.
     */
    public function getVirtualMachineNetworkInterface(): VirtualMachineNetworkInterfaceLookup
    {
        return $this->virtualMachineNetworkInterface;
    }

    /**
     * All 'virtual_machine_network_interface[]' params are mutually exclusive, only one can be provided.
     */
    public function setVirtualMachineNetworkInterface(VirtualMachineNetworkInterfaceLookup $virtualMachineNetworkInterface): self
    {
        $this->initialized['virtualMachineNetworkInterface'] = true;
        $this->virtualMachineNetworkInterface = $virtualMachineNetworkInterface;

        return $this;
    }

    public function getAddressVersion(): string
    {
        return $this->addressVersion;
    }

    public function setAddressVersion(string $addressVersion): self
    {
        $this->initialized['addressVersion'] = true;
        $this->addressVersion = $addressVersion;

        return $this;
    }
}
