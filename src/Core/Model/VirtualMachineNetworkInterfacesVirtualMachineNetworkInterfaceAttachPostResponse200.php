<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAttachPostResponse200 extends \ArrayObject
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
     * @var VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAttachPostResponse200VirtualMachineNetworkInterface
     */
    protected $virtualMachineNetworkInterface;
    /**
     * @var Task
     */
    protected $task;

    /**
     * The network interface details.
     */
    public function getVirtualMachineNetworkInterface(): VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAttachPostResponse200VirtualMachineNetworkInterface
    {
        return $this->virtualMachineNetworkInterface;
    }

    /**
     * The network interface details.
     */
    public function setVirtualMachineNetworkInterface(VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceAttachPostResponse200VirtualMachineNetworkInterface $virtualMachineNetworkInterface): self
    {
        $this->initialized['virtualMachineNetworkInterface'] = true;
        $this->virtualMachineNetworkInterface = $virtualMachineNetworkInterface;

        return $this;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function setTask(Task $task): self
    {
        $this->initialized['task'] = true;
        $this->task = $task;

        return $this;
    }
}