<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class OrganizationPolicy extends \ArrayObject
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
     * @var DecimalOrUnlimited
     */
    protected $maximumUninvoicedBalance;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumVirtualMachines;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumVirtualMachineMemory;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumDiskSpace;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumManagedOrganizations;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumUnallocatedIpAddresses;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumSecurityGroups;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumVirtualNetworks;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumLoadBalancers;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumDnsZones;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumCertificates;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumFileStorageVolumes;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumIsos;
    /**
     * @var IntegerOrUnlimited
     */
    protected $maximumDiskSize;
    /**
     * @var IntegerValue
     */
    protected $minimumDiskSize;
    /**
     * @var bool
     */
    protected $flexibleVirtualMachineResources;
    /**
     * @var bool
     */
    protected $allowSuspension;
    /**
     * @var bool
     */
    protected $allowRestrictedTrafficTypes;

    public function getMaximumUninvoicedBalance(): DecimalOrUnlimited
    {
        return $this->maximumUninvoicedBalance;
    }

    public function setMaximumUninvoicedBalance(DecimalOrUnlimited $maximumUninvoicedBalance): self
    {
        $this->initialized['maximumUninvoicedBalance'] = true;
        $this->maximumUninvoicedBalance = $maximumUninvoicedBalance;

        return $this;
    }

    public function getMaximumVirtualMachines(): IntegerOrUnlimited
    {
        return $this->maximumVirtualMachines;
    }

    public function setMaximumVirtualMachines(IntegerOrUnlimited $maximumVirtualMachines): self
    {
        $this->initialized['maximumVirtualMachines'] = true;
        $this->maximumVirtualMachines = $maximumVirtualMachines;

        return $this;
    }

    public function getMaximumVirtualMachineMemory(): IntegerOrUnlimited
    {
        return $this->maximumVirtualMachineMemory;
    }

    public function setMaximumVirtualMachineMemory(IntegerOrUnlimited $maximumVirtualMachineMemory): self
    {
        $this->initialized['maximumVirtualMachineMemory'] = true;
        $this->maximumVirtualMachineMemory = $maximumVirtualMachineMemory;

        return $this;
    }

    public function getMaximumDiskSpace(): IntegerOrUnlimited
    {
        return $this->maximumDiskSpace;
    }

    public function setMaximumDiskSpace(IntegerOrUnlimited $maximumDiskSpace): self
    {
        $this->initialized['maximumDiskSpace'] = true;
        $this->maximumDiskSpace = $maximumDiskSpace;

        return $this;
    }

    public function getMaximumManagedOrganizations(): IntegerOrUnlimited
    {
        return $this->maximumManagedOrganizations;
    }

    public function setMaximumManagedOrganizations(IntegerOrUnlimited $maximumManagedOrganizations): self
    {
        $this->initialized['maximumManagedOrganizations'] = true;
        $this->maximumManagedOrganizations = $maximumManagedOrganizations;

        return $this;
    }

    public function getMaximumUnallocatedIpAddresses(): IntegerOrUnlimited
    {
        return $this->maximumUnallocatedIpAddresses;
    }

    public function setMaximumUnallocatedIpAddresses(IntegerOrUnlimited $maximumUnallocatedIpAddresses): self
    {
        $this->initialized['maximumUnallocatedIpAddresses'] = true;
        $this->maximumUnallocatedIpAddresses = $maximumUnallocatedIpAddresses;

        return $this;
    }

    public function getMaximumSecurityGroups(): IntegerOrUnlimited
    {
        return $this->maximumSecurityGroups;
    }

    public function setMaximumSecurityGroups(IntegerOrUnlimited $maximumSecurityGroups): self
    {
        $this->initialized['maximumSecurityGroups'] = true;
        $this->maximumSecurityGroups = $maximumSecurityGroups;

        return $this;
    }

    public function getMaximumVirtualNetworks(): IntegerOrUnlimited
    {
        return $this->maximumVirtualNetworks;
    }

    public function setMaximumVirtualNetworks(IntegerOrUnlimited $maximumVirtualNetworks): self
    {
        $this->initialized['maximumVirtualNetworks'] = true;
        $this->maximumVirtualNetworks = $maximumVirtualNetworks;

        return $this;
    }

    public function getMaximumLoadBalancers(): IntegerOrUnlimited
    {
        return $this->maximumLoadBalancers;
    }

    public function setMaximumLoadBalancers(IntegerOrUnlimited $maximumLoadBalancers): self
    {
        $this->initialized['maximumLoadBalancers'] = true;
        $this->maximumLoadBalancers = $maximumLoadBalancers;

        return $this;
    }

    public function getMaximumDnsZones(): IntegerOrUnlimited
    {
        return $this->maximumDnsZones;
    }

    public function setMaximumDnsZones(IntegerOrUnlimited $maximumDnsZones): self
    {
        $this->initialized['maximumDnsZones'] = true;
        $this->maximumDnsZones = $maximumDnsZones;

        return $this;
    }

    public function getMaximumCertificates(): IntegerOrUnlimited
    {
        return $this->maximumCertificates;
    }

    public function setMaximumCertificates(IntegerOrUnlimited $maximumCertificates): self
    {
        $this->initialized['maximumCertificates'] = true;
        $this->maximumCertificates = $maximumCertificates;

        return $this;
    }

    public function getMaximumFileStorageVolumes(): IntegerOrUnlimited
    {
        return $this->maximumFileStorageVolumes;
    }

    public function setMaximumFileStorageVolumes(IntegerOrUnlimited $maximumFileStorageVolumes): self
    {
        $this->initialized['maximumFileStorageVolumes'] = true;
        $this->maximumFileStorageVolumes = $maximumFileStorageVolumes;

        return $this;
    }

    public function getMaximumIsos(): IntegerOrUnlimited
    {
        return $this->maximumIsos;
    }

    public function setMaximumIsos(IntegerOrUnlimited $maximumIsos): self
    {
        $this->initialized['maximumIsos'] = true;
        $this->maximumIsos = $maximumIsos;

        return $this;
    }

    public function getMaximumDiskSize(): IntegerOrUnlimited
    {
        return $this->maximumDiskSize;
    }

    public function setMaximumDiskSize(IntegerOrUnlimited $maximumDiskSize): self
    {
        $this->initialized['maximumDiskSize'] = true;
        $this->maximumDiskSize = $maximumDiskSize;

        return $this;
    }

    public function getMinimumDiskSize(): IntegerValue
    {
        return $this->minimumDiskSize;
    }

    public function setMinimumDiskSize(IntegerValue $minimumDiskSize): self
    {
        $this->initialized['minimumDiskSize'] = true;
        $this->minimumDiskSize = $minimumDiskSize;

        return $this;
    }

    public function getFlexibleVirtualMachineResources(): bool
    {
        return $this->flexibleVirtualMachineResources;
    }

    public function setFlexibleVirtualMachineResources(bool $flexibleVirtualMachineResources): self
    {
        $this->initialized['flexibleVirtualMachineResources'] = true;
        $this->flexibleVirtualMachineResources = $flexibleVirtualMachineResources;

        return $this;
    }

    public function getAllowSuspension(): bool
    {
        return $this->allowSuspension;
    }

    public function setAllowSuspension(bool $allowSuspension): self
    {
        $this->initialized['allowSuspension'] = true;
        $this->allowSuspension = $allowSuspension;

        return $this;
    }

    public function getAllowRestrictedTrafficTypes(): bool
    {
        return $this->allowRestrictedTrafficTypes;
    }

    public function setAllowRestrictedTrafficTypes(bool $allowRestrictedTrafficTypes): self
    {
        $this->initialized['allowRestrictedTrafficTypes'] = true;
        $this->allowRestrictedTrafficTypes = $allowRestrictedTrafficTypes;

        return $this;
    }
}
