<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Model;

class PricingEstimateResource extends \ArrayObject
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
    protected $resource;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var float
     */
    protected $perMonth;
    /**
     * @var float
     */
    protected $perMonthIncTax;
    /**
     * @var float
     */
    protected $perMonthEach;
    /**
     * @var float
     */
    protected $perHour;
    /**
     * @var float
     */
    protected $perHourIncTax;
    /**
     * @var float
     */
    protected $perHourEach;
    /**
     * @var PricingEstimateResourcePackage|null
     */
    protected $package;

    public function getResource(): string
    {
        return $this->resource;
    }

    public function setResource(string $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    public function getPerMonth(): float
    {
        return $this->perMonth;
    }

    public function setPerMonth(float $perMonth): self
    {
        $this->initialized['perMonth'] = true;
        $this->perMonth = $perMonth;

        return $this;
    }

    public function getPerMonthIncTax(): float
    {
        return $this->perMonthIncTax;
    }

    public function setPerMonthIncTax(float $perMonthIncTax): self
    {
        $this->initialized['perMonthIncTax'] = true;
        $this->perMonthIncTax = $perMonthIncTax;

        return $this;
    }

    public function getPerMonthEach(): float
    {
        return $this->perMonthEach;
    }

    public function setPerMonthEach(float $perMonthEach): self
    {
        $this->initialized['perMonthEach'] = true;
        $this->perMonthEach = $perMonthEach;

        return $this;
    }

    public function getPerHour(): float
    {
        return $this->perHour;
    }

    public function setPerHour(float $perHour): self
    {
        $this->initialized['perHour'] = true;
        $this->perHour = $perHour;

        return $this;
    }

    public function getPerHourIncTax(): float
    {
        return $this->perHourIncTax;
    }

    public function setPerHourIncTax(float $perHourIncTax): self
    {
        $this->initialized['perHourIncTax'] = true;
        $this->perHourIncTax = $perHourIncTax;

        return $this;
    }

    public function getPerHourEach(): float
    {
        return $this->perHourEach;
    }

    public function setPerHourEach(float $perHourEach): self
    {
        $this->initialized['perHourEach'] = true;
        $this->perHourEach = $perHourEach;

        return $this;
    }

    public function getPackage(): ?PricingEstimateResourcePackage
    {
        return $this->package;
    }

    public function setPackage(?PricingEstimateResourcePackage $package): self
    {
        $this->initialized['package'] = true;
        $this->package = $package;

        return $this;
    }
}