<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OperatingSystemsGetResponse200 extends \ArrayObject
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
     * @var OperatingSystemsGetResponse200Pagination
     */
    protected $pagination;
    /**
     * The list of available operating systems.
     *
     * @var GetOperatingSystems200ResponseOperatingSystems[]
     */
    protected $operatingSystems;

    public function getPagination(): OperatingSystemsGetResponse200Pagination
    {
        return $this->pagination;
    }

    public function setPagination(OperatingSystemsGetResponse200Pagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * The list of available operating systems.
     *
     * @return GetOperatingSystems200ResponseOperatingSystems[]
     */
    public function getOperatingSystems(): array
    {
        return $this->operatingSystems;
    }

    /**
     * The list of available operating systems.
     *
     * @param GetOperatingSystems200ResponseOperatingSystems[] $operatingSystems
     */
    public function setOperatingSystems(array $operatingSystems): self
    {
        $this->initialized['operatingSystems'] = true;
        $this->operatingSystems = $operatingSystems;

        return $this;
    }
}