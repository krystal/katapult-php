<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class CountriesGetResponse200 extends \ArrayObject
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
     * @var PaginationObject
     */
    protected $pagination;
    /**
     * The list of countries.
     *
     * @var GetCountries200ResponseCountries[]
     */
    protected $countries;

    public function getPagination(): PaginationObject
    {
        return $this->pagination;
    }

    public function setPagination(PaginationObject $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * The list of countries.
     *
     * @return GetCountries200ResponseCountries[]
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * The list of countries.
     *
     * @param GetCountries200ResponseCountries[] $countries
     */
    public function setCountries(array $countries): self
    {
        $this->initialized['countries'] = true;
        $this->countries = $countries;

        return $this;
    }
}
