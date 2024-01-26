<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class PatchVirtualMachine200ResponseVirtualMachineGroup extends \ArrayObject
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
     * @var bool
     */
    protected $segregate;
    /**
     * @var bool
     */
    protected $autoSegregate;
    /**
     * @var int
     */
    protected $createdAt;

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

    public function getSegregate(): bool
    {
        return $this->segregate;
    }

    public function setSegregate(bool $segregate): self
    {
        $this->initialized['segregate'] = true;
        $this->segregate = $segregate;

        return $this;
    }

    public function getAutoSegregate(): bool
    {
        return $this->autoSegregate;
    }

    public function setAutoSegregate(bool $autoSegregate): self
    {
        $this->initialized['autoSegregate'] = true;
        $this->autoSegregate = $autoSegregate;

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
}
