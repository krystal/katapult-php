<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAttachPostBody extends \ArrayObject
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
     * @var VirtualMachineNetworkInterfaceLookup
     */
    protected $virtualMachineNetworkInterface;

    public function getVirtualMachineNetworkInterface(): VirtualMachineNetworkInterfaceLookup
    {
        return $this->virtualMachineNetworkInterface;
    }

    public function setVirtualMachineNetworkInterface(VirtualMachineNetworkInterfaceLookup $virtualMachineNetworkInterface): self
    {
        $this->initialized['virtualMachineNetworkInterface'] = true;
        $this->virtualMachineNetworkInterface = $virtualMachineNetworkInterface;

        return $this;
    }
}