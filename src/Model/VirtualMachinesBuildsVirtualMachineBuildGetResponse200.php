<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class VirtualMachinesBuildsVirtualMachineBuildGetResponse200 extends \ArrayObject
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
     * @var GetVirtualMachinesBuildsVirtualMachineBuild200ResponseVirtualMachineBuild
     */
    protected $virtualMachineBuild;

    public function getVirtualMachineBuild(): GetVirtualMachinesBuildsVirtualMachineBuild200ResponseVirtualMachineBuild
    {
        return $this->virtualMachineBuild;
    }

    public function setVirtualMachineBuild(GetVirtualMachinesBuildsVirtualMachineBuild200ResponseVirtualMachineBuild $virtualMachineBuild): self
    {
        $this->initialized['virtualMachineBuild'] = true;
        $this->virtualMachineBuild = $virtualMachineBuild;

        return $this;
    }
}
