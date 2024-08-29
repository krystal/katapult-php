<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class OrganizationsOrganizationDnsZonesGetResponse200 extends \ArrayObject
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
     * The DNS zones for the provided organization.
     *
     * @var list<DNSZone>
     */
    protected $dnsZones;

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
     * The DNS zones for the provided organization.
     *
     * @return list<DNSZone>
     */
    public function getDnsZones(): array
    {
        return $this->dnsZones;
    }

    /**
     * The DNS zones for the provided organization.
     *
     * @param list<DNSZone> $dnsZones
     */
    public function setDnsZones(array $dnsZones): self
    {
        $this->initialized['dnsZones'] = true;
        $this->dnsZones = $dnsZones;

        return $this;
    }
}