<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class GetVirtualMachineNetworkInterface200ResponseVirtualMachineNetworkInterface extends \ArrayObject
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
     * @var GetVirtualMachineNetworkInterfacePartVirtualMachine
     */
    protected $virtualMachine;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var GetVirtualMachineNetworkInterface200ResponseVirtualMachineNetworkInterfaceNetwork|null
     */
    protected $network;
    /**
     * @var GetVirtualMachineNetworkInterface200ResponseVirtualMachineNetworkInterfaceVirtualNetwork|null
     */
    protected $virtualNetwork;
    /**
     * @var string
     */
    protected $macAddress;
    /**
     * @var string
     */
    protected $state;
    /**
     * @var list<GetVirtualMachineNetworkInterfacePartIPAddresses>
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

    public function getVirtualMachine(): GetVirtualMachineNetworkInterfacePartVirtualMachine
    {
        return $this->virtualMachine;
    }

    public function setVirtualMachine(GetVirtualMachineNetworkInterfacePartVirtualMachine $virtualMachine): self
    {
        $this->initialized['virtualMachine'] = true;
        $this->virtualMachine = $virtualMachine;

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

    public function getNetwork(): ?GetVirtualMachineNetworkInterface200ResponseVirtualMachineNetworkInterfaceNetwork
    {
        return $this->network;
    }

    public function setNetwork(?GetVirtualMachineNetworkInterface200ResponseVirtualMachineNetworkInterfaceNetwork $network): self
    {
        $this->initialized['network'] = true;
        $this->network = $network;

        return $this;
    }

    public function getVirtualNetwork(): ?GetVirtualMachineNetworkInterface200ResponseVirtualMachineNetworkInterfaceVirtualNetwork
    {
        return $this->virtualNetwork;
    }

    public function setVirtualNetwork(?GetVirtualMachineNetworkInterface200ResponseVirtualMachineNetworkInterfaceVirtualNetwork $virtualNetwork): self
    {
        $this->initialized['virtualNetwork'] = true;
        $this->virtualNetwork = $virtualNetwork;

        return $this;
    }

    public function getMacAddress(): string
    {
        return $this->macAddress;
    }

    public function setMacAddress(string $macAddress): self
    {
        $this->initialized['macAddress'] = true;
        $this->macAddress = $macAddress;

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

    /**
     * @return list<GetVirtualMachineNetworkInterfacePartIPAddresses>
     */
    public function getIpAddresses(): array
    {
        return $this->ipAddresses;
    }

    /**
     * @param list<GetVirtualMachineNetworkInterfacePartIPAddresses> $ipAddresses
     */
    public function setIpAddresses(array $ipAddresses): self
    {
        $this->initialized['ipAddresses'] = true;
        $this->ipAddresses = $ipAddresses;

        return $this;
    }
}
