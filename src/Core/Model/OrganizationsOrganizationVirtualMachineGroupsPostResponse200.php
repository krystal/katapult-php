<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class OrganizationsOrganizationVirtualMachineGroupsPostResponse200 extends \ArrayObject
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
     * The new virtual machine group details.
     *
     * @var OrganizationsOrganizationVirtualMachineGroupsPostResponse200VirtualMachineGroup
     */
    protected $virtualMachineGroup;

    /**
     * The new virtual machine group details.
     */
    public function getVirtualMachineGroup(): OrganizationsOrganizationVirtualMachineGroupsPostResponse200VirtualMachineGroup
    {
        return $this->virtualMachineGroup;
    }

    /**
     * The new virtual machine group details.
     */
    public function setVirtualMachineGroup(OrganizationsOrganizationVirtualMachineGroupsPostResponse200VirtualMachineGroup $virtualMachineGroup): self
    {
        $this->initialized['virtualMachineGroup'] = true;
        $this->virtualMachineGroup = $virtualMachineGroup;

        return $this;
    }
}
