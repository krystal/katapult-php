<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class GetOrganizationVirtualMachines200ResponseVirtualMachines extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $hostname;
    /**
     * @var string
     */
    protected $fqdn;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var Zone
     */
    protected $zone;
    /**
     * @var GetOrganizationVirtualMachines200ResponseVirtualMachinesPackage|null
     */
    protected $package;
    /**
     * @var GetOrganizationVirtualMachines200ResponseVirtualMachinesGpuType|null
     */
    protected $gpuType;
    /**
     * @var GetOrganizationVirtualMachinesPartIPAddresses[]
     */
    protected $ipAddresses;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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

    public function getFqdn(): string
    {
        return $this->fqdn;
    }

    public function setFqdn(string $fqdn): self
    {
        $this->initialized['fqdn'] = true;
        $this->fqdn = $fqdn;

        return $this;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getZone(): Zone
    {
        return $this->zone;
    }

    public function setZone(Zone $zone): self
    {
        $this->initialized['zone'] = true;
        $this->zone = $zone;

        return $this;
    }

    public function getPackage(): ?GetOrganizationVirtualMachines200ResponseVirtualMachinesPackage
    {
        return $this->package;
    }

    public function setPackage(?GetOrganizationVirtualMachines200ResponseVirtualMachinesPackage $package): self
    {
        $this->initialized['package'] = true;
        $this->package = $package;

        return $this;
    }

    public function getGpuType(): ?GetOrganizationVirtualMachines200ResponseVirtualMachinesGpuType
    {
        return $this->gpuType;
    }

    public function setGpuType(?GetOrganizationVirtualMachines200ResponseVirtualMachinesGpuType $gpuType): self
    {
        $this->initialized['gpuType'] = true;
        $this->gpuType = $gpuType;

        return $this;
    }

    /**
     * @return GetOrganizationVirtualMachinesPartIPAddresses[]
     */
    public function getIpAddresses(): array
    {
        return $this->ipAddresses;
    }

    /**
     * @param GetOrganizationVirtualMachinesPartIPAddresses[] $ipAddresses
     */
    public function setIpAddresses(array $ipAddresses): self
    {
        $this->initialized['ipAddresses'] = true;
        $this->ipAddresses = $ipAddresses;

        return $this;
    }
}
