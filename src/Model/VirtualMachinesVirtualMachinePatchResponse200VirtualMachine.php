<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachinesVirtualMachinePatchResponse200VirtualMachine extends \ArrayObject
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
     * @var string|null
     */
    protected $description;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var string|null
     */
    protected $initialRootPassword;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var Zone
     */
    protected $zone;
    /**
     * @var Organization
     */
    protected $organization;
    /**
     * @var PatchVirtualMachine200ResponseVirtualMachineGroup|null
     */
    protected $group;
    /**
     * @var PatchVirtualMachine200ResponseVirtualMachinePackage|null
     */
    protected $package;
    /**
     * @var PatchVirtualMachine200ResponseVirtualMachineAttachedIso|null
     */
    protected $attachedIso;
    /**
     * @var int|null
     */
    protected $memoryInGb;
    /**
     * @var int|null
     */
    protected $cpuCores;
    /**
     * @var bool|null
     */
    protected $useDedicatedCpus;
    /**
     * @var PatchVirtualMachine200ResponseVirtualMachineGpuType|null
     */
    protected $gpuType;
    /**
     * @var list<VirtualMachineGPU>
     */
    protected $gpus;
    /**
     * @var list<Tag>
     */
    protected $tags;
    /**
     * @var list<string>
     */
    protected $tagNames;
    /**
     * @var list<IPAddress>
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

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

    public function getInitialRootPassword(): ?string
    {
        return $this->initialRootPassword;
    }

    public function setInitialRootPassword(?string $initialRootPassword): self
    {
        $this->initialized['initialRootPassword'] = true;
        $this->initialRootPassword = $initialRootPassword;

        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

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

    public function getOrganization(): Organization
    {
        return $this->organization;
    }

    public function setOrganization(Organization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    public function getGroup(): ?PatchVirtualMachine200ResponseVirtualMachineGroup
    {
        return $this->group;
    }

    public function setGroup(?PatchVirtualMachine200ResponseVirtualMachineGroup $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;

        return $this;
    }

    public function getPackage(): ?PatchVirtualMachine200ResponseVirtualMachinePackage
    {
        return $this->package;
    }

    public function setPackage(?PatchVirtualMachine200ResponseVirtualMachinePackage $package): self
    {
        $this->initialized['package'] = true;
        $this->package = $package;

        return $this;
    }

    public function getAttachedIso(): ?PatchVirtualMachine200ResponseVirtualMachineAttachedIso
    {
        return $this->attachedIso;
    }

    public function setAttachedIso(?PatchVirtualMachine200ResponseVirtualMachineAttachedIso $attachedIso): self
    {
        $this->initialized['attachedIso'] = true;
        $this->attachedIso = $attachedIso;

        return $this;
    }

    public function getMemoryInGb(): ?int
    {
        return $this->memoryInGb;
    }

    public function setMemoryInGb(?int $memoryInGb): self
    {
        $this->initialized['memoryInGb'] = true;
        $this->memoryInGb = $memoryInGb;

        return $this;
    }

    public function getCpuCores(): ?int
    {
        return $this->cpuCores;
    }

    public function setCpuCores(?int $cpuCores): self
    {
        $this->initialized['cpuCores'] = true;
        $this->cpuCores = $cpuCores;

        return $this;
    }

    public function getUseDedicatedCpus(): ?bool
    {
        return $this->useDedicatedCpus;
    }

    public function setUseDedicatedCpus(?bool $useDedicatedCpus): self
    {
        $this->initialized['useDedicatedCpus'] = true;
        $this->useDedicatedCpus = $useDedicatedCpus;

        return $this;
    }

    public function getGpuType(): ?PatchVirtualMachine200ResponseVirtualMachineGpuType
    {
        return $this->gpuType;
    }

    public function setGpuType(?PatchVirtualMachine200ResponseVirtualMachineGpuType $gpuType): self
    {
        $this->initialized['gpuType'] = true;
        $this->gpuType = $gpuType;

        return $this;
    }

    /**
     * @return list<VirtualMachineGPU>
     */
    public function getGpus(): array
    {
        return $this->gpus;
    }

    /**
     * @param list<VirtualMachineGPU> $gpus
     */
    public function setGpus(array $gpus): self
    {
        $this->initialized['gpus'] = true;
        $this->gpus = $gpus;

        return $this;
    }

    /**
     * @return list<Tag>
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param list<Tag> $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTagNames(): array
    {
        return $this->tagNames;
    }

    /**
     * @param list<string> $tagNames
     */
    public function setTagNames(array $tagNames): self
    {
        $this->initialized['tagNames'] = true;
        $this->tagNames = $tagNames;

        return $this;
    }

    /**
     * @return list<IPAddress>
     */
    public function getIpAddresses(): array
    {
        return $this->ipAddresses;
    }

    /**
     * @param list<IPAddress> $ipAddresses
     */
    public function setIpAddresses(array $ipAddresses): self
    {
        $this->initialized['ipAddresses'] = true;
        $this->ipAddresses = $ipAddresses;

        return $this;
    }
}
