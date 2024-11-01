<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class AddressListsAddressListEntriesBulkPostBody extends \ArrayObject
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
     * @var list<AddressListEntryArguments>
     */
    protected $add;
    /**
     * @var list<AddressListEntryArguments>
     */
    protected $remove;

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

    /**
     * @return list<AddressListEntryArguments>
     */
    public function getAdd(): array
    {
        return $this->add;
    }

    /**
     * @param list<AddressListEntryArguments> $add
     */
    public function setAdd(array $add): self
    {
        $this->initialized['add'] = true;
        $this->add = $add;

        return $this;
    }

    /**
     * @return list<AddressListEntryArguments>
     */
    public function getRemove(): array
    {
        return $this->remove;
    }

    /**
     * @param list<AddressListEntryArguments> $remove
     */
    public function setRemove(array $remove): self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;

        return $this;
    }
}
