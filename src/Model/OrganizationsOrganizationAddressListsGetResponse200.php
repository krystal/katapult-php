<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationAddressListsGetResponse200 extends \ArrayObject
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
     * A list of all address lists for the given organization.
     *
     * @var list<GetOrganizationAddressLists200ResponseAddressLists>
     */
    protected $addressLists;

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
     * A list of all address lists for the given organization.
     *
     * @return list<GetOrganizationAddressLists200ResponseAddressLists>
     */
    public function getAddressLists(): array
    {
        return $this->addressLists;
    }

    /**
     * A list of all address lists for the given organization.
     *
     * @param list<GetOrganizationAddressLists200ResponseAddressLists> $addressLists
     */
    public function setAddressLists(array $addressLists): self
    {
        $this->initialized['addressLists'] = true;
        $this->addressLists = $addressLists;

        return $this;
    }
}
