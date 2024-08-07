<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachinePackagesGetResponse200 extends \ArrayObject
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
     * @var list<GetVirtualMachinePackages200ResponseVirtualMachinePackages>
     */
    protected $virtualMachinePackages;

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
     * @return list<GetVirtualMachinePackages200ResponseVirtualMachinePackages>
     */
    public function getVirtualMachinePackages(): array
    {
        return $this->virtualMachinePackages;
    }

    /**
     * @param list<GetVirtualMachinePackages200ResponseVirtualMachinePackages> $virtualMachinePackages
     */
    public function setVirtualMachinePackages(array $virtualMachinePackages): self
    {
        $this->initialized['virtualMachinePackages'] = true;
        $this->virtualMachinePackages = $virtualMachinePackages;

        return $this;
    }
}
