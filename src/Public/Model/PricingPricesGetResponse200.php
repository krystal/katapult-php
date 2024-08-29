<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Model;

class PricingPricesGetResponse200 extends \ArrayObject
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
     * The prices in the default price plan.
     *
     * @var list<GetPricingPrices200ResponsePrices>
     */
    protected $prices;

    /**
     * The prices in the default price plan.
     *
     * @return list<GetPricingPrices200ResponsePrices>
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * The prices in the default price plan.
     *
     * @param list<GetPricingPrices200ResponsePrices> $prices
     */
    public function setPrices(array $prices): self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;

        return $this;
    }
}
