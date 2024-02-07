<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class PostVirtualMachineConsoleSessions201ResponseConsoleSession extends \ArrayObject
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
    protected $url;
    /**
     * @var int
     */
    protected $expiresAt;
    /**
     * @var VirtualMachine
     */
    protected $virtualMachine;

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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getExpiresAt(): int
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(int $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;

        return $this;
    }

    public function getVirtualMachine(): VirtualMachine
    {
        return $this->virtualMachine;
    }

    public function setVirtualMachine(VirtualMachine $virtualMachine): self
    {
        $this->initialized['virtualMachine'] = true;
        $this->virtualMachine = $virtualMachine;

        return $this;
    }
}
