<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class DataCentersDataCenterGpuTypesGetResponse200 extends \ArrayObject
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
     * @var DataCentersDataCenterGpuTypesGetResponse200Pagination
     */
    protected $pagination;
    /**
     * @var GetDataCenterGPUTypes200ResponseGPUTypes[]
     */
    protected $gpuTypes;

    public function getPagination(): DataCentersDataCenterGpuTypesGetResponse200Pagination
    {
        return $this->pagination;
    }

    public function setPagination(DataCentersDataCenterGpuTypesGetResponse200Pagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }

    /**
     * @return GetDataCenterGPUTypes200ResponseGPUTypes[]
     */
    public function getGpuTypes(): array
    {
        return $this->gpuTypes;
    }

    /**
     * @param GetDataCenterGPUTypes200ResponseGPUTypes[] $gpuTypes
     */
    public function setGpuTypes(array $gpuTypes): self
    {
        $this->initialized['gpuTypes'] = true;
        $this->gpuTypes = $gpuTypes;

        return $this;
    }
}