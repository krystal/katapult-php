<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachinesVirtualMachineGetResponse200 extends \ArrayObject
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
     * @var GetVirtualMachine200ResponseVirtualMachine
     */
    protected $virtualMachine;

    public function getVirtualMachine(): GetVirtualMachine200ResponseVirtualMachine
    {
        return $this->virtualMachine;
    }

    public function setVirtualMachine(GetVirtualMachine200ResponseVirtualMachine $virtualMachine): self
    {
        $this->initialized['virtualMachine'] = true;
        $this->virtualMachine = $virtualMachine;

        return $this;
    }
}
