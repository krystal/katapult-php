<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class VirtualMachinesVirtualMachineNetworkInterfacesPostResponse200 extends \ArrayObject
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
     * The network interface details.
     *
     * @var VirtualMachinesVirtualMachineNetworkInterfacesPostResponse200VirtualMachineNetworkInterface
     */
    protected $virtualMachineNetworkInterface;

    /**
     * The network interface details.
     */
    public function getVirtualMachineNetworkInterface(): VirtualMachinesVirtualMachineNetworkInterfacesPostResponse200VirtualMachineNetworkInterface
    {
        return $this->virtualMachineNetworkInterface;
    }

    /**
     * The network interface details.
     */
    public function setVirtualMachineNetworkInterface(VirtualMachinesVirtualMachineNetworkInterfacesPostResponse200VirtualMachineNetworkInterface $virtualMachineNetworkInterface): self
    {
        $this->initialized['virtualMachineNetworkInterface'] = true;
        $this->virtualMachineNetworkInterface = $virtualMachineNetworkInterface;

        return $this;
    }
}
