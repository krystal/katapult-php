<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class PatchVirtualMachinePartGPUs extends \ArrayObject
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
     * Unique ID for this GPU. Not available when status is "detached".
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $pendingAction;
    /**
     * When pending action is "attach", this indicates if there is a GPU of the relevant type available.
     *
     * @var bool
     */
    protected $available;
    /**
     * @var PatchVirtualMachinePartType
     */
    protected $type;

    /**
     * Unique ID for this GPU. Not available when status is "detached".
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique ID for this GPU. Not available when status is "detached".
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

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

    public function getPendingAction(): string
    {
        return $this->pendingAction;
    }

    public function setPendingAction(string $pendingAction): self
    {
        $this->initialized['pendingAction'] = true;
        $this->pendingAction = $pendingAction;

        return $this;
    }

    /**
     * When pending action is "attach", this indicates if there is a GPU of the relevant type available.
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }

    /**
     * When pending action is "attach", this indicates if there is a GPU of the relevant type available.
     */
    public function setAvailable(bool $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;

        return $this;
    }

    public function getType(): PatchVirtualMachinePartType
    {
        return $this->type;
    }

    public function setType(PatchVirtualMachinePartType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
