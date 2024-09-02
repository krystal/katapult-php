<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Model;

class VirtualMachinePackage extends \ArrayObject
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
    protected $permalink;
    /**
     * @var int
     */
    protected $cpuCores;
    /**
     * @var int
     */
    protected $ipv4Addresses;
    /**
     * @var int
     */
    protected $memoryInGb;
    /**
     * @var int
     */
    protected $storageInGb;
    /**
     * @var int|null
     */
    protected $monthlyBandwidthAllowanceInGb;
    /**
     * @var string
     */
    protected $privacy;
    /**
     * @var VirtualMachinePackageIcon|null
     */
    protected $icon;
    /**
     * @var bool
     */
    protected $useDedicatedCpus;
    /**
     * @var VirtualMachinePackageGroup
     */
    protected $group;

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

    public function getPermalink(): string
    {
        return $this->permalink;
    }

    public function setPermalink(string $permalink): self
    {
        $this->initialized['permalink'] = true;
        $this->permalink = $permalink;

        return $this;
    }

    public function getCpuCores(): int
    {
        return $this->cpuCores;
    }

    public function setCpuCores(int $cpuCores): self
    {
        $this->initialized['cpuCores'] = true;
        $this->cpuCores = $cpuCores;

        return $this;
    }

    public function getIpv4Addresses(): int
    {
        return $this->ipv4Addresses;
    }

    public function setIpv4Addresses(int $ipv4Addresses): self
    {
        $this->initialized['ipv4Addresses'] = true;
        $this->ipv4Addresses = $ipv4Addresses;

        return $this;
    }

    public function getMemoryInGb(): int
    {
        return $this->memoryInGb;
    }

    public function setMemoryInGb(int $memoryInGb): self
    {
        $this->initialized['memoryInGb'] = true;
        $this->memoryInGb = $memoryInGb;

        return $this;
    }

    public function getStorageInGb(): int
    {
        return $this->storageInGb;
    }

    public function setStorageInGb(int $storageInGb): self
    {
        $this->initialized['storageInGb'] = true;
        $this->storageInGb = $storageInGb;

        return $this;
    }

    public function getMonthlyBandwidthAllowanceInGb(): ?int
    {
        return $this->monthlyBandwidthAllowanceInGb;
    }

    public function setMonthlyBandwidthAllowanceInGb(?int $monthlyBandwidthAllowanceInGb): self
    {
        $this->initialized['monthlyBandwidthAllowanceInGb'] = true;
        $this->monthlyBandwidthAllowanceInGb = $monthlyBandwidthAllowanceInGb;

        return $this;
    }

    public function getPrivacy(): string
    {
        return $this->privacy;
    }

    public function setPrivacy(string $privacy): self
    {
        $this->initialized['privacy'] = true;
        $this->privacy = $privacy;

        return $this;
    }

    public function getIcon(): ?VirtualMachinePackageIcon
    {
        return $this->icon;
    }

    public function setIcon(?VirtualMachinePackageIcon $icon): self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;

        return $this;
    }

    public function getUseDedicatedCpus(): bool
    {
        return $this->useDedicatedCpus;
    }

    public function setUseDedicatedCpus(bool $useDedicatedCpus): self
    {
        $this->initialized['useDedicatedCpus'] = true;
        $this->useDedicatedCpus = $useDedicatedCpus;

        return $this;
    }

    public function getGroup(): VirtualMachinePackageGroup
    {
        return $this->group;
    }

    public function setGroup(VirtualMachinePackageGroup $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;

        return $this;
    }
}
