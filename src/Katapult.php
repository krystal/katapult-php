<?php

namespace Krystal\Katapult;

use Krystal\Katapult\API\KatapultApiInterface;
use Krystal\Katapult\Resources\DataCenter;
use Krystal\Katapult\Traits\Makeable;

/**
 * Class Katapult
 * @package Krystal\Katapult
 *
 * @property-read DataCenter $dataCenter
 */
class Katapult
{
    use Makeable;

    /**
     * @var KatapultApiInterface
     */
    private $api;

    public function __construct(KatapultApiInterface $api)
    {
        $this->api = $api;
    }

    public function resource($resourceClass, ...$args)
    {
        return $this->api->getResourceController($resourceClass, ...$args);
    }
}

