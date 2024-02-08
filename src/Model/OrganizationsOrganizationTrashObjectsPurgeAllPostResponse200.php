<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class OrganizationsOrganizationTrashObjectsPurgeAllPostResponse200 extends \ArrayObject
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
     * @var Task
     */
    protected $task;

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
