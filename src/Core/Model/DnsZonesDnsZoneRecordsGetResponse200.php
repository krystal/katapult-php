<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DnsZonesDnsZoneRecordsGetResponse200 extends \ArrayObject
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
     * The DNS record for the provided zone.
     *
     * @var list<DNSRecord>
     */
    protected $dnsRecords;

    /**
     * The DNS record for the provided zone.
     *
     * @return list<DNSRecord>
     */
    public function getDnsRecords(): array
    {
        return $this->dnsRecords;
    }

    /**
     * The DNS record for the provided zone.
     *
     * @param list<DNSRecord> $dnsRecords
     */
    public function setDnsRecords(array $dnsRecords): self
    {
        $this->initialized['dnsRecords'] = true;
        $this->dnsRecords = $dnsRecords;

        return $this;
    }
}
