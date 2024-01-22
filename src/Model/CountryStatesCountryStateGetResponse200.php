<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class CountryStatesCountryStateGetResponse200 extends \ArrayObject
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
     * The country state details.
     *
     * @var CountryStatesCountryStateGetResponse200CountryState
     */
    protected $countryState;

    /**
     * The country state details.
     */
    public function getCountryState(): CountryStatesCountryStateGetResponse200CountryState
    {
        return $this->countryState;
    }

    /**
     * The country state details.
     */
    public function setCountryState(CountryStatesCountryStateGetResponse200CountryState $countryState): self
    {
        $this->initialized['countryState'] = true;
        $this->countryState = $countryState;

        return $this;
    }
}
