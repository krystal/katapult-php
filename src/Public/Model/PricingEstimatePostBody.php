<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Model;

class PricingEstimatePostBody extends \ArrayObject
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
     * The customer's name.
     *
     * @var string
     */
    protected $customerName;
    /**
     * @var list<PricingEstimateResourceArguments>
     */
    protected $resources;
    /**
     * @var string
     */
    protected $customerType;
    /**
     * All 'currency[]' params are mutually exclusive, only one can be provided.
     *
     * @var CurrencyLookup
     */
    protected $currency;
    /**
     * All 'country[]' params are mutually exclusive, only one can be provided.
     *
     * @var CountryLookup
     */
    protected $country;

    /**
     * The customer's name.
     */
    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    /**
     * The customer's name.
     */
    public function setCustomerName(string $customerName): self
    {
        $this->initialized['customerName'] = true;
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * @return list<PricingEstimateResourceArguments>
     */
    public function getResources(): array
    {
        return $this->resources;
    }

    /**
     * @param list<PricingEstimateResourceArguments> $resources
     */
    public function setResources(array $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;

        return $this;
    }

    public function getCustomerType(): string
    {
        return $this->customerType;
    }

    public function setCustomerType(string $customerType): self
    {
        $this->initialized['customerType'] = true;
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * All 'currency[]' params are mutually exclusive, only one can be provided.
     */
    public function getCurrency(): CurrencyLookup
    {
        return $this->currency;
    }

    /**
     * All 'currency[]' params are mutually exclusive, only one can be provided.
     */
    public function setCurrency(CurrencyLookup $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;

        return $this;
    }

    /**
     * All 'country[]' params are mutually exclusive, only one can be provided.
     */
    public function getCountry(): CountryLookup
    {
        return $this->country;
    }

    /**
     * All 'country[]' params are mutually exclusive, only one can be provided.
     */
    public function setCountry(CountryLookup $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }
}
