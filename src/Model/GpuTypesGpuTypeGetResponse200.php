<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class GpuTypesGpuTypeGetResponse200 extends \ArrayObject
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
     * @var GpuTypesGpuTypeGetResponse200GpuType
     */
    protected $gpuType;

    public function getGpuType(): GpuTypesGpuTypeGetResponse200GpuType
    {
        return $this->gpuType;
    }

    public function setGpuType(GpuTypesGpuTypeGetResponse200GpuType $gpuType): self
    {
        $this->initialized['gpuType'] = true;
        $this->gpuType = $gpuType;

        return $this;
    }
}
