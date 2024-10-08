<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class IpAddressesIpAddressGetResponse200 extends \ArrayObject
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
     * The IP address that has been located.
     *
     * @var IpAddressesIpAddressGetResponse200IpAddress
     */
    protected $ipAddress;
    /**
     * The resource this address is allocated to.
     *
     * @var IpAddressesIpAddressGetResponse200Allocation|null
     */
    protected $allocation;

    /**
     * The IP address that has been located.
     */
    public function getIpAddress(): IpAddressesIpAddressGetResponse200IpAddress
    {
        return $this->ipAddress;
    }

    /**
     * The IP address that has been located.
     */
    public function setIpAddress(IpAddressesIpAddressGetResponse200IpAddress $ipAddress): self
    {
        $this->initialized['ipAddress'] = true;
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * The resource this address is allocated to.
     */
    public function getAllocation(): ?IpAddressesIpAddressGetResponse200Allocation
    {
        return $this->allocation;
    }

    /**
     * The resource this address is allocated to.
     */
    public function setAllocation(?IpAddressesIpAddressGetResponse200Allocation $allocation): self
    {
        $this->initialized['allocation'] = true;
        $this->allocation = $allocation;

        return $this;
    }
}
