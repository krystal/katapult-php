<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DeleteVirtualMachine200ResponseVirtualMachine extends \ArrayObject
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
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $initialRootPassword;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var DeleteVirtualMachinePartZone
     */
    protected $zone;
    /**
     * @var DeleteVirtualMachinePartOrganization
     */
    protected $organization;
    /**
     * @var DeleteVirtualMachinePartGroup
     */
    protected $group;
    /**
     * @var DeleteVirtualMachinePartPackage
     */
    protected $package;
    /**
     * @var DeleteVirtualMachinePartAttachedISO
     */
    protected $attachedIso;
    /**
     * @var int
     */
    protected $memoryInGb;
    /**
     * @var int
     */
    protected $cpuCores;
    /**
     * @var DeleteVirtualMachinePartGPUType
     */
    protected $gpuType;
    /**
     * @var DeleteVirtualMachinePartGPUs[]
     */
    protected $gpus;
    /**
     * @var DeleteVirtualMachinePartTags[]
     */
    protected $tags;
    /**
     * @var string[]
     */
    protected $tagNames;
    /**
     * @var DeleteVirtualMachinePartIPAddresses[]
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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
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

    public function getInitialRootPassword(): string
    {
        return $this->initialRootPassword;
    }

    public function setInitialRootPassword(string $initialRootPassword): self
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

    public function getZone(): DeleteVirtualMachinePartZone
    {
        return $this->zone;
    }

    public function setZone(DeleteVirtualMachinePartZone $zone): self
    {
        $this->initialized['zone'] = true;
        $this->zone = $zone;

        return $this;
    }

    public function getOrganization(): DeleteVirtualMachinePartOrganization
    {
        return $this->organization;
    }

    public function setOrganization(DeleteVirtualMachinePartOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    public function getGroup(): DeleteVirtualMachinePartGroup
    {
        return $this->group;
    }

    public function setGroup(DeleteVirtualMachinePartGroup $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;

        return $this;
    }

    public function getPackage(): DeleteVirtualMachinePartPackage
    {
        return $this->package;
    }

    public function setPackage(DeleteVirtualMachinePartPackage $package): self
    {
        $this->initialized['package'] = true;
        $this->package = $package;

        return $this;
    }

    public function getAttachedIso(): DeleteVirtualMachinePartAttachedISO
    {
        return $this->attachedIso;
    }

    public function setAttachedIso(DeleteVirtualMachinePartAttachedISO $attachedIso): self
    {
        $this->initialized['attachedIso'] = true;
        $this->attachedIso = $attachedIso;

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

    public function getGpuType(): DeleteVirtualMachinePartGPUType
    {
        return $this->gpuType;
    }

    public function setGpuType(DeleteVirtualMachinePartGPUType $gpuType): self
    {
        $this->initialized['gpuType'] = true;
        $this->gpuType = $gpuType;

        return $this;
    }

    /**
     * @return DeleteVirtualMachinePartGPUs[]
     */
    public function getGpus(): array
    {
        return $this->gpus;
    }

    /**
     * @param DeleteVirtualMachinePartGPUs[] $gpus
     */
    public function setGpus(array $gpus): self
    {
        $this->initialized['gpus'] = true;
        $this->gpus = $gpus;

        return $this;
    }

    /**
     * @return DeleteVirtualMachinePartTags[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param DeleteVirtualMachinePartTags[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getTagNames(): array
    {
        return $this->tagNames;
    }

    /**
     * @param string[] $tagNames
     */
    public function setTagNames(array $tagNames): self
    {
        $this->initialized['tagNames'] = true;
        $this->tagNames = $tagNames;

        return $this;
    }

    /**
     * @return DeleteVirtualMachinePartIPAddresses[]
     */
    public function getIpAddresses(): array
    {
        return $this->ipAddresses;
    }

    /**
     * @param DeleteVirtualMachinePartIPAddresses[] $ipAddresses
     */
    public function setIpAddresses(array $ipAddresses): self
    {
        $this->initialized['ipAddresses'] = true;
        $this->ipAddresses = $ipAddresses;

        return $this;
    }
}
