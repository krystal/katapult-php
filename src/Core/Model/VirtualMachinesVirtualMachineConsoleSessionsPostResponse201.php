<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class VirtualMachinesVirtualMachineConsoleSessionsPostResponse201 extends \ArrayObject
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
     * @var PostVirtualMachineConsoleSessions201ResponseConsoleSession
     */
    protected $consoleSession;

    public function getConsoleSession(): PostVirtualMachineConsoleSessions201ResponseConsoleSession
    {
        return $this->consoleSession;
    }

    public function setConsoleSession(PostVirtualMachineConsoleSessions201ResponseConsoleSession $consoleSession): self
    {
        $this->initialized['consoleSession'] = true;
        $this->consoleSession = $consoleSession;

        return $this;
    }
}
