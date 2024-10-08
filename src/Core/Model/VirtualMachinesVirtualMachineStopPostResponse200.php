<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class VirtualMachinesVirtualMachineStopPostResponse200 extends \ArrayObject
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
     * @var PostVirtualMachineStop200ResponseTask
     */
    protected $task;

    public function getTask(): PostVirtualMachineStop200ResponseTask
    {
        return $this->task;
    }

    public function setTask(PostVirtualMachineStop200ResponseTask $task): self
    {
        $this->initialized['task'] = true;
        $this->task = $task;

        return $this;
    }
}
