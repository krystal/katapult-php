<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachinesVirtualMachineFlexibleResourcesPutResponse200Task extends \ArrayObject
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
    protected $status;
    /**
     * @var int
     */
    protected $createdAt;
    /**
     * @var int
     */
    protected $startedAt;
    /**
     * @var int
     */
    protected $finishedAt;
    /**
     * @var int
     */
    protected $progress;

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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

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

    public function getStartedAt(): int
    {
        return $this->startedAt;
    }

    public function setStartedAt(int $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;

        return $this;
    }

    public function getFinishedAt(): int
    {
        return $this->finishedAt;
    }

    public function setFinishedAt(int $finishedAt): self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;

        return $this;
    }

    public function getProgress(): int
    {
        return $this->progress;
    }

    public function setProgress(int $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;

        return $this;
    }
}
