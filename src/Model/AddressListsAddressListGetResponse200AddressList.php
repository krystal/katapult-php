<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class AddressListsAddressListGetResponse200AddressList extends \ArrayObject
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
     * Name of the address list.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether the address list is global or not.
     *
     * @var bool
     */
    protected $global;
    /**
     * @var list<AddressListEntry>
     */
    protected $entries;

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

    /**
     * Name of the address list.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the address list.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Whether the address list is global or not.
     */
    public function getGlobal(): bool
    {
        return $this->global;
    }

    /**
     * Whether the address list is global or not.
     */
    public function setGlobal(bool $global): self
    {
        $this->initialized['global'] = true;
        $this->global = $global;

        return $this;
    }

    /**
     * @return list<AddressListEntry>
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    /**
     * @param list<AddressListEntry> $entries
     */
    public function setEntries(array $entries): self
    {
        $this->initialized['entries'] = true;
        $this->entries = $entries;

        return $this;
    }
}
