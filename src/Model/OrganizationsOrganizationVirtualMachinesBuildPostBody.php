<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationVirtualMachinesBuildPostBody extends \ArrayObject
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
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     *
     * @var OrganizationLookup
     */
    protected $organization;
    /**
     * All 'zone[]' params are mutually exclusive, only one can be provided.
     *
     * @var ZoneLookup
     */
    protected $zone;
    /**
     * All 'data_center[]' params are mutually exclusive, only one can be provided.
     *
     * @var DataCenterLookup
     */
    protected $dataCenter;
    /**
     * All 'virtual_machine_package[]' params are mutually exclusive, only one can be provided.
     *
     * @var VirtualMachinePackageLookup
     */
    protected $package;
    /**
     * All 'disk_template[]' params are mutually exclusive, only one can be provided.
     *
     * @var DiskTemplateLookup
     */
    protected $diskTemplate;
    /**
     * @var list<KeyValue>
     */
    protected $diskTemplateOptions;
    /**
     * All 'network[]' params are mutually exclusive, only one can be provided.
     *
     * @var NetworkLookup
     */
    protected $network;
    /**
     * @var string
     */
    protected $hostname;

    /**
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     */
    public function getOrganization(): OrganizationLookup
    {
        return $this->organization;
    }

    /**
     * All 'organization[]' params are mutually exclusive, only one can be provided.
     */
    public function setOrganization(OrganizationLookup $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * All 'zone[]' params are mutually exclusive, only one can be provided.
     */
    public function getZone(): ZoneLookup
    {
        return $this->zone;
    }

    /**
     * All 'zone[]' params are mutually exclusive, only one can be provided.
     */
    public function setZone(ZoneLookup $zone): self
    {
        $this->initialized['zone'] = true;
        $this->zone = $zone;

        return $this;
    }

    /**
     * All 'data_center[]' params are mutually exclusive, only one can be provided.
     */
    public function getDataCenter(): DataCenterLookup
    {
        return $this->dataCenter;
    }

    /**
     * All 'data_center[]' params are mutually exclusive, only one can be provided.
     */
    public function setDataCenter(DataCenterLookup $dataCenter): self
    {
        $this->initialized['dataCenter'] = true;
        $this->dataCenter = $dataCenter;

        return $this;
    }

    /**
     * All 'virtual_machine_package[]' params are mutually exclusive, only one can be provided.
     */
    public function getPackage(): VirtualMachinePackageLookup
    {
        return $this->package;
    }

    /**
     * All 'virtual_machine_package[]' params are mutually exclusive, only one can be provided.
     */
    public function setPackage(VirtualMachinePackageLookup $package): self
    {
        $this->initialized['package'] = true;
        $this->package = $package;

        return $this;
    }

    /**
     * All 'disk_template[]' params are mutually exclusive, only one can be provided.
     */
    public function getDiskTemplate(): DiskTemplateLookup
    {
        return $this->diskTemplate;
    }

    /**
     * All 'disk_template[]' params are mutually exclusive, only one can be provided.
     */
    public function setDiskTemplate(DiskTemplateLookup $diskTemplate): self
    {
        $this->initialized['diskTemplate'] = true;
        $this->diskTemplate = $diskTemplate;

        return $this;
    }

    /**
     * @return list<KeyValue>
     */
    public function getDiskTemplateOptions(): array
    {
        return $this->diskTemplateOptions;
    }

    /**
     * @param list<KeyValue> $diskTemplateOptions
     */
    public function setDiskTemplateOptions(array $diskTemplateOptions): self
    {
        $this->initialized['diskTemplateOptions'] = true;
        $this->diskTemplateOptions = $diskTemplateOptions;

        return $this;
    }

    /**
     * All 'network[]' params are mutually exclusive, only one can be provided.
     */
    public function getNetwork(): NetworkLookup
    {
        return $this->network;
    }

    /**
     * All 'network[]' params are mutually exclusive, only one can be provided.
     */
    public function setNetwork(NetworkLookup $network): self
    {
        $this->initialized['network'] = true;
        $this->network = $network;

        return $this;
    }

    public function getHostname(): string
    {
        return $this->hostname;
    }

    public function setHostname(string $hostname): self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;

        return $this;
    }
}
