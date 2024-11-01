<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class AddressListsAddressListPatchBody extends \ArrayObject
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
     * @var AddressListArguments
     */
    protected $properties;
    /**
     * @var list<KeyValue>
     */
    protected $annotations;

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

    public function getProperties(): AddressListArguments
    {
        return $this->properties;
    }

    public function setProperties(AddressListArguments $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return list<KeyValue>
     */
    public function getAnnotations(): array
    {
        return $this->annotations;
    }

    /**
     * @param list<KeyValue> $annotations
     */
    public function setAnnotations(array $annotations): self
    {
        $this->initialized['annotations'] = true;
        $this->annotations = $annotations;

        return $this;
    }
}
