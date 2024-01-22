<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class IpAddressesIpAddressPatchResponse200IpAddress extends \ArrayObject
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
    protected $address;
    /**
     * @var string
     */
    protected $reverseDns;
    /**
     * @var bool
     */
    protected $vip;
    /**
     * @var string
     */
    protected $label;
    /**
     * @var string
     */
    protected $addressWithMask;
    /**
     * @var Network
     */
    protected $network;
    /**
     * @var string
     */
    protected $allocationId;
    /**
     * @var string
     */
    protected $allocationType;

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

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    public function getReverseDns(): string
    {
        return $this->reverseDns;
    }

    public function setReverseDns(string $reverseDns): self
    {
        $this->initialized['reverseDns'] = true;
        $this->reverseDns = $reverseDns;

        return $this;
    }

    public function getVip(): bool
    {
        return $this->vip;
    }

    public function setVip(bool $vip): self
    {
        $this->initialized['vip'] = true;
        $this->vip = $vip;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    public function getAddressWithMask(): string
    {
        return $this->addressWithMask;
    }

    public function setAddressWithMask(string $addressWithMask): self
    {
        $this->initialized['addressWithMask'] = true;
        $this->addressWithMask = $addressWithMask;

        return $this;
    }

    public function getNetwork(): Network
    {
        return $this->network;
    }

    public function setNetwork(Network $network): self
    {
        $this->initialized['network'] = true;
        $this->network = $network;

        return $this;
    }

    public function getAllocationId(): string
    {
        return $this->allocationId;
    }

    public function setAllocationId(string $allocationId): self
    {
        $this->initialized['allocationId'] = true;
        $this->allocationId = $allocationId;

        return $this;
    }

    public function getAllocationType(): string
    {
        return $this->allocationType;
    }

    public function setAllocationType(string $allocationType): self
    {
        $this->initialized['allocationType'] = true;
        $this->allocationType = $allocationType;

        return $this;
    }
}
