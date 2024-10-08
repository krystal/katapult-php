<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class DataCentersDataCenterDefaultNetworkGetResponse200 extends \ArrayObject
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
     * The details for the requested network.
     *
     * @var DataCentersDataCenterDefaultNetworkGetResponse200Network
     */
    protected $network;

    /**
     * The details for the requested network.
     */
    public function getNetwork(): DataCentersDataCenterDefaultNetworkGetResponse200Network
    {
        return $this->network;
    }

    /**
     * The details for the requested network.
     */
    public function setNetwork(DataCentersDataCenterDefaultNetworkGetResponse200Network $network): self
    {
        $this->initialized['network'] = true;
        $this->network = $network;

        return $this;
    }
}
