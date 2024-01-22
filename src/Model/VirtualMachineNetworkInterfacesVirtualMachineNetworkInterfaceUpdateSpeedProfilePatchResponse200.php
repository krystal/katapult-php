<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceUpdateSpeedProfilePatchResponse200 extends \ArrayObject
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
     * The task responsible for updating the virtual machine network interface speed profile.
     *
     * @var VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceUpdateSpeedProfilePatchResponse200Task
     */
    protected $task;

    /**
     * The task responsible for updating the virtual machine network interface speed profile.
     */
    public function getTask(): VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceUpdateSpeedProfilePatchResponse200Task
    {
        return $this->task;
    }

    /**
     * The task responsible for updating the virtual machine network interface speed profile.
     */
    public function setTask(VirtualMachineNetworkInterfacesVirtualMachineNetworkInterfaceUpdateSpeedProfilePatchResponse200Task $task): self
    {
        $this->initialized['task'] = true;
        $this->task = $task;

        return $this;
    }
}
