<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Model;

class GetLoadBalancer200ResponseLoadBalancerWeightsItem extends \ArrayObject
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
    protected $virtualMachineId;
    /**
     * @var int
     */
    protected $weight;

    public function getVirtualMachineId(): string
    {
        return $this->virtualMachineId;
    }

    public function setVirtualMachineId(string $virtualMachineId): self
    {
        $this->initialized['virtualMachineId'] = true;
        $this->virtualMachineId = $virtualMachineId;

        return $this;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;

        return $this;
    }
}
