<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DnsRecordsDnsRecordDeleteBody extends \ArrayObject
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
     * @var DNSRecordLookup
     */
    protected $dnsRecord;

    public function getDnsRecord(): DNSRecordLookup
    {
        return $this->dnsRecord;
    }

    public function setDnsRecord(DNSRecordLookup $dnsRecord): self
    {
        $this->initialized['dnsRecord'] = true;
        $this->dnsRecord = $dnsRecord;

        return $this;
    }
}
