<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class OrganizationsOrganizationAddressListsPostResponse201 extends \ArrayObject
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
     * The address list.
     *
     * @var OrganizationsOrganizationAddressListsPostResponse201AddressList
     */
    protected $addressList;
    /**
     * @var list<KeyValue>
     */
    protected $annotations;

    /**
     * The address list.
     */
    public function getAddressList(): OrganizationsOrganizationAddressListsPostResponse201AddressList
    {
        return $this->addressList;
    }

    /**
     * The address list.
     */
    public function setAddressList(OrganizationsOrganizationAddressListsPostResponse201AddressList $addressList): self
    {
        $this->initialized['addressList'] = true;
        $this->addressList = $addressList;

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
