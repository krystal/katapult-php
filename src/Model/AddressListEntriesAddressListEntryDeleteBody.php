<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class AddressListEntriesAddressListEntryDeleteBody extends \ArrayObject
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
     * All 'address_list_entry[]' params are mutually exclusive, only one can be provided.
     *
     * @var AddressListEntryLookup
     */
    protected $addressListEntry;

    /**
     * All 'address_list_entry[]' params are mutually exclusive, only one can be provided.
     */
    public function getAddressListEntry(): AddressListEntryLookup
    {
        return $this->addressListEntry;
    }

    /**
     * All 'address_list_entry[]' params are mutually exclusive, only one can be provided.
     */
    public function setAddressListEntry(AddressListEntryLookup $addressListEntry): self
    {
        $this->initialized['addressListEntry'] = true;
        $this->addressListEntry = $addressListEntry;

        return $this;
    }
}