<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class GetOrganizationManaged200ResponseOrganizations extends \ArrayObject
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
    protected $subDomain;
    /**
     * @var string
     */
    protected $infrastructureDomain;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var bool
     */
    protected $managed;

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

    public function getSubDomain(): string
    {
        return $this->subDomain;
    }

    public function setSubDomain(string $subDomain): self
    {
        $this->initialized['subDomain'] = true;
        $this->subDomain = $subDomain;

        return $this;
    }

    public function getInfrastructureDomain(): string
    {
        return $this->infrastructureDomain;
    }

    public function setInfrastructureDomain(string $infrastructureDomain): self
    {
        $this->initialized['infrastructureDomain'] = true;
        $this->infrastructureDomain = $infrastructureDomain;

        return $this;
    }

    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getManaged(): bool
    {
        return $this->managed;
    }

    public function setManaged(bool $managed): self
    {
        $this->initialized['managed'] = true;
        $this->managed = $managed;

        return $this;
    }
}