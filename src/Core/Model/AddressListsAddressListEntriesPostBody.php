<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class AddressListsAddressListEntriesPostBody extends \ArrayObject
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
     * @var AddressListLookup
     */
    protected $addressList;
    /**
     * @var AddressListEntryArguments
     */
    protected $properties;

    public function getAddressList(): AddressListLookup
    {
        return $this->addressList;
    }

    public function setAddressList(AddressListLookup $addressList): self
    {
        $this->initialized['addressList'] = true;
        $this->addressList = $addressList;

        return $this;
    }

    public function getProperties(): AddressListEntryArguments
    {
        return $this->properties;
    }

    public function setProperties(AddressListEntryArguments $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

        return $this;
    }
}
