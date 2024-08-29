<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class ObjectInTrash extends \ArrayObject
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
     * @var ObjectInTrashTrashObject|null
     */
    protected $trashObject;

    public function getTrashObject(): ?ObjectInTrashTrashObject
    {
        return $this->trashObject;
    }

    public function setTrashObject(?ObjectInTrashTrashObject $trashObject): self
    {
        $this->initialized['trashObject'] = true;
        $this->trashObject = $trashObject;

        return $this;
    }
}