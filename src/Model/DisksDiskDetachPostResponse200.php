<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DisksDiskDetachPostResponse200 extends \ArrayObject
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
     * The disk that will be detached from its virtual machine.
     *
     * @var DisksDiskDetachPostResponse200Disk
     */
    protected $disk;
    /**
     * @var Task
     */
    protected $task;

    /**
     * The disk that will be detached from its virtual machine.
     */
    public function getDisk(): DisksDiskDetachPostResponse200Disk
    {
        return $this->disk;
    }

    /**
     * The disk that will be detached from its virtual machine.
     */
    public function setDisk(DisksDiskDetachPostResponse200Disk $disk): self
    {
        $this->initialized['disk'] = true;
        $this->disk = $disk;

        return $this;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function setTask(Task $task): self
    {
        $this->initialized['task'] = true;
        $this->task = $task;

        return $this;
    }
}
