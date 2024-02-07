<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DeleteVirtualMachinePartOrganization extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $subDomain;
    /**
     * @var string
     */
    protected $infrastructureDomain;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var bool
     */
    protected $suspended;
    /**
     * @var bool
     */
    protected $managed;
    /**
     * @var string|null
     */
    protected $billingName;
    /**
     * @var string|null
     */
    protected $address1;
    /**
     * @var string|null
     */
    protected $address2;
    /**
     * @var string|null
     */
    protected $address3;
    /**
     * @var string|null
     */
    protected $address4;
    /**
     * @var string|null
     */
    protected $postcode;
    /**
     * @var string|null
     */
    protected $vatNumber;
    /**
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * @var DeleteVirtualMachinePartCurrency
     */
    protected $currency;
    /**
     * @var DeleteVirtualMachinePartOrganizationCountry|null
     */
    protected $country;
    /**
     * @var DeleteVirtualMachinePartOrganizationCountryState|null
     */
    protected $countryState;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getSubDomain(): string
    {
        return $this->subDomain;
    }

    public function setSubDomain(string $subDomain): self
    {
        $this->initialized['subDomain'] = true;
        $this->subDomain = $subDomain;

        return $this;
    }

    public function getInfrastructureDomain(): string
    {
        return $this->infrastructureDomain;
    }

    public function setInfrastructureDomain(string $infrastructureDomain): self
    {
        $this->initialized['infrastructureDomain'] = true;
        $this->infrastructureDomain = $infrastructureDomain;

        return $this;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getSuspended(): bool
    {
        return $this->suspended;
    }

    public function setSuspended(bool $suspended): self
    {
        $this->initialized['suspended'] = true;
        $this->suspended = $suspended;

        return $this;
    }

    public function getManaged(): bool
    {
        return $this->managed;
    }

    public function setManaged(bool $managed): self
    {
        $this->initialized['managed'] = true;
        $this->managed = $managed;

        return $this;
    }

    public function getBillingName(): ?string
    {
        return $this->billingName;
    }

    public function setBillingName(?string $billingName): self
    {
        $this->initialized['billingName'] = true;
        $this->billingName = $billingName;

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(?string $address1): self
    {
        $this->initialized['address1'] = true;
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->initialized['address2'] = true;
        $this->address2 = $address2;

        return $this;
    }

    public function getAddress3(): ?string
    {
        return $this->address3;
    }

    public function setAddress3(?string $address3): self
    {
        $this->initialized['address3'] = true;
        $this->address3 = $address3;

        return $this;
    }

    public function getAddress4(): ?string
    {
        return $this->address4;
    }

    public function setAddress4(?string $address4): self
    {
        $this->initialized['address4'] = true;
        $this->address4 = $address4;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(?string $postcode): self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;

        return $this;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    public function setVatNumber(?string $vatNumber): self
    {
        $this->initialized['vatNumber'] = true;
        $this->vatNumber = $vatNumber;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getCurrency(): DeleteVirtualMachinePartCurrency
    {
        return $this->currency;
    }

    public function setCurrency(DeleteVirtualMachinePartCurrency $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    public function getCountry(): ?DeleteVirtualMachinePartOrganizationCountry
    {
        return $this->country;
    }

    public function setCountry(?DeleteVirtualMachinePartOrganizationCountry $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }

    public function getCountryState(): ?DeleteVirtualMachinePartOrganizationCountryState
    {
        return $this->countryState;
    }

    public function setCountryState(?DeleteVirtualMachinePartOrganizationCountryState $countryState): self
    {
        $this->initialized['countryState'] = true;
        $this->countryState = $countryState;

        return $this;
    }
}
