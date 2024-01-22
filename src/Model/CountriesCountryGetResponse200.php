<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class CountriesCountryGetResponse200 extends \ArrayObject
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
     * The country details.
     *
     * @var CountriesCountryGetResponse200Country
     */
    protected $country;

    /**
     * The country details.
     */
    public function getCountry(): CountriesCountryGetResponse200Country
    {
        return $this->country;
    }

    /**
     * The country details.
     */
    public function setCountry(CountriesCountryGetResponse200Country $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;

        return $this;
    }
}
