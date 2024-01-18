<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DnsZonesDnsZoneUpdateTtlPostResponse200 extends \ArrayObject
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
     * The DNS zone with the new TTL value.
     *
     * @var DnsZonesDnsZoneUpdateTtlPostResponse200DnsZone
     */
    protected $dnsZone;

    /**
     * The DNS zone with the new TTL value.
     */
    public function getDnsZone(): DnsZonesDnsZoneUpdateTtlPostResponse200DnsZone
    {
        return $this->dnsZone;
    }

    /**
     * The DNS zone with the new TTL value.
     */
    public function setDnsZone(DnsZonesDnsZoneUpdateTtlPostResponse200DnsZone $dnsZone): self
    {
        $this->initialized['dnsZone'] = true;
        $this->dnsZone = $dnsZone;

        return $this;
    }
}