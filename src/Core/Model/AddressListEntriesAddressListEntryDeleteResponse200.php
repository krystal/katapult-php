<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class AddressListEntriesAddressListEntryDeleteResponse200 extends \ArrayObject
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
     * The address list entry that has been destroyed.
     *
     * @var AddressListEntriesAddressListEntryDeleteResponse200AddressListEntry
     */
    protected $addressListEntry;

    /**
     * The address list entry that has been destroyed.
     */
    public function getAddressListEntry(): AddressListEntriesAddressListEntryDeleteResponse200AddressListEntry
    {
        return $this->addressListEntry;
    }

    /**
     * The address list entry that has been destroyed.
     */
    public function setAddressListEntry(AddressListEntriesAddressListEntryDeleteResponse200AddressListEntry $addressListEntry): self
    {
        $this->initialized['addressListEntry'] = true;
        $this->addressListEntry = $addressListEntry;

        return $this;
    }
}
