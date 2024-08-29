<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class AddressListEntriesAddressListEntryGetResponse200AddressListEntry extends \ArrayObject
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
     * Address or network.
     *
     * @var string
     */
    protected $address;
    /**
     * Optional name/comment.
     *
     * @var string
     */
    protected $name;

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
     * Address or network.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Address or network.
     */
    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * Optional name/comment.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Optional name/comment.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}