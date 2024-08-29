<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Model;

class GetPricingPrices200ResponsePrices extends \ArrayObject
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
    protected $category;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var list<PriceVariant>
     */
    protected $variants;

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

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

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

    /**
     * @return list<PriceVariant>
     */
    public function getVariants(): array
    {
        return $this->variants;
    }

    /**
     * @param list<PriceVariant> $variants
     */
    public function setVariants(array $variants): self
    {
        $this->initialized['variants'] = true;
        $this->variants = $variants;

        return $this;
    }
}