<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class VirtualMachinesVirtualMachineNetworkInterfacesGetResponse200 extends \ArrayObject
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
     * @var PaginationObject
     */
    protected $pagination;
    /**
     * The network interfaces for this virtual machine.
     *
     * @var list<GetVirtualMachineNetworkInterfaces200ResponseVirtualMachineNetworkInterfaces>
     */
    protected $virtualMachineNetworkInterfaces;

    public function getPagination(): PaginationObject
    {
        return $this->pagination;
    }

    public function setPagination(PaginationObject $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * The network interfaces for this virtual machine.
     *
     * @return list<GetVirtualMachineNetworkInterfaces200ResponseVirtualMachineNetworkInterfaces>
     */
    public function getVirtualMachineNetworkInterfaces(): array
    {
        return $this->virtualMachineNetworkInterfaces;
    }

    /**
     * The network interfaces for this virtual machine.
     *
     * @param list<GetVirtualMachineNetworkInterfaces200ResponseVirtualMachineNetworkInterfaces> $virtualMachineNetworkInterfaces
     */
    public function setVirtualMachineNetworkInterfaces(array $virtualMachineNetworkInterfaces): self
    {
        $this->initialized['virtualMachineNetworkInterfaces'] = true;
        $this->virtualMachineNetworkInterfaces = $virtualMachineNetworkInterfaces;

        return $this;
    }
}
