<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DNSRecordArguments extends \ArrayObject
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
     * The name of the record.
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $ttl;
    /**
     * @var int
     */
    protected $priority;
    /**
     * @var DNSRecordContentArguments
     */
    protected $content;

    /**
     * The name of the record.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the record.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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

    public function getContent(): DNSRecordContentArguments
    {
        return $this->content;
    }

    public function setContent(DNSRecordContentArguments $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }
}
