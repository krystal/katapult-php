<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachinesVirtualMachineDeleteResponse200 extends \ArrayObject
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
     * @var TrashObject
     */
    protected $trashObject;
    /**
     * @var DeleteVirtualMachine200ResponseVirtualMachine
     */
    protected $virtualMachine;

    public function getTrashObject(): TrashObject
    {
        return $this->trashObject;
    }

    public function setTrashObject(TrashObject $trashObject): self
    {
        $this->initialized['trashObject'] = true;
        $this->trashObject = $trashObject;

        return $this;
    }

    public function getVirtualMachine(): DeleteVirtualMachine200ResponseVirtualMachine
    {
        return $this->virtualMachine;
    }

    public function setVirtualMachine(DeleteVirtualMachine200ResponseVirtualMachine $virtualMachine): self
    {
        $this->initialized['virtualMachine'] = true;
        $this->virtualMachine = $virtualMachine;

        return $this;
    }
}
