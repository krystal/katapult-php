<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DnsRecordsDnsRecordPatchBody extends \ArrayObject
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
     * All 'dns_record[]' params are mutually exclusive, only one can be provided.
     *
     * @var DNSRecordLookup
     */
    protected $dnsRecord;
    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     *
     * @var DNSRecordArguments
     */
    protected $properties;

    /**
     * All 'dns_record[]' params are mutually exclusive, only one can be provided.
     */
    public function getDnsRecord(): DNSRecordLookup
    {
        return $this->dnsRecord;
    }

    /**
     * All 'dns_record[]' params are mutually exclusive, only one can be provided.
     */
    public function setDnsRecord(DNSRecordLookup $dnsRecord): self
    {
        $this->initialized['dnsRecord'] = true;
        $this->dnsRecord = $dnsRecord;

        return $this;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function getProperties(): DNSRecordArguments
    {
        return $this->properties;
    }

    /**
     * All 'properties[]' params are mutually exclusive, only one can be provided.
     */
    public function setProperties(DNSRecordArguments $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;

        return $this;
    }
}