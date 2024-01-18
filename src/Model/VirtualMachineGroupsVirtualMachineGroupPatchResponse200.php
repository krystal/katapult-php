<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachineGroupsVirtualMachineGroupPatchResponse200 extends \ArrayObject
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
     * The updated virtual machine group details.
     *
     * @var VirtualMachineGroupsVirtualMachineGroupPatchResponse200VirtualMachineGroup
     */
    protected $virtualMachineGroup;

    /**
     * The updated virtual machine group details.
     */
    public function getVirtualMachineGroup(): VirtualMachineGroupsVirtualMachineGroupPatchResponse200VirtualMachineGroup
    {
        return $this->virtualMachineGroup;
    }

    /**
     * The updated virtual machine group details.
     */
    public function setVirtualMachineGroup(VirtualMachineGroupsVirtualMachineGroupPatchResponse200VirtualMachineGroup $virtualMachineGroup): self
    {
        $this->initialized['virtualMachineGroup'] = true;
        $this->virtualMachineGroup = $virtualMachineGroup;

        return $this;
    }
}
