<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class GetGPUTypes200ResponseGPUTypes extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $manufacturer;
    /**
     * @var int
     */
    protected $memoryInGb;
    /**
     * @var string
     */
    protected $memoryType;
    /**
     * @var string
     */
    protected $permalink;
    /**
     * @var list<GetGPUTypes200ResponseGPUTypesDataCentersItem>
     */
    protected $dataCenters;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): self
    {
        $this->initialized['manufacturer'] = true;
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getMemoryInGb(): int
    {
        return $this->memoryInGb;
    }

    public function setMemoryInGb(int $memoryInGb): self
    {
        $this->initialized['memoryInGb'] = true;
        $this->memoryInGb = $memoryInGb;

        return $this;
    }

    public function getMemoryType(): string
    {
        return $this->memoryType;
    }

    public function setMemoryType(string $memoryType): self
    {
        $this->initialized['memoryType'] = true;
        $this->memoryType = $memoryType;

        return $this;
    }

    public function getPermalink(): string
    {
        return $this->permalink;
    }

    public function setPermalink(string $permalink): self
    {
        $this->initialized['permalink'] = true;
        $this->permalink = $permalink;

        return $this;
    }

    /**
     * @return list<GetGPUTypes200ResponseGPUTypesDataCentersItem>
     */
    public function getDataCenters(): array
    {
        return $this->dataCenters;
    }

    /**
     * @param list<GetGPUTypes200ResponseGPUTypesDataCentersItem> $dataCenters
     */
    public function setDataCenters(array $dataCenters): self
    {
        $this->initialized['dataCenters'] = true;
        $this->dataCenters = $dataCenters;

        return $this;
    }
}
