<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class OrganizationsOrganizationVirtualMachineGroupsGetResponse200 extends \ArrayObject
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
     * The virtual machine groups for the provided organization.
     *
     * @var list<VirtualMachineGroup>
     */
    protected $virtualMachineGroups;

    /**
     * The virtual machine groups for the provided organization.
     *
     * @return list<VirtualMachineGroup>
     */
    public function getVirtualMachineGroups(): array
    {
        return $this->virtualMachineGroups;
    }

    /**
     * The virtual machine groups for the provided organization.
     *
     * @param list<VirtualMachineGroup> $virtualMachineGroups
     */
    public function setVirtualMachineGroups(array $virtualMachineGroups): self
    {
        $this->initialized['virtualMachineGroups'] = true;
        $this->virtualMachineGroups = $virtualMachineGroups;

        return $this;
    }
}
