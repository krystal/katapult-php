<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DnsZonesDnsZoneRecordsPostResponse200DnsRecord extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $fullName;
    /**
     * @var int
     */
    protected $ttl;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $priority;
    /**
     * @var string
     */
    protected $content;
    /**
     * @var DNSRecordContentAttributes
     */
    protected $contentAttributes;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;

        return $this;
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }

    public function setTtl(int $ttl): self
    {
        $this->initialized['ttl'] = true;
        $this->ttl = $ttl;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;

        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    public function getContentAttributes(): DNSRecordContentAttributes
    {
        return $this->contentAttributes;
    }

    public function setContentAttributes(DNSRecordContentAttributes $contentAttributes): self
    {
        $this->initialized['contentAttributes'] = true;
        $this->contentAttributes = $contentAttributes;

        return $this;
    }
}
