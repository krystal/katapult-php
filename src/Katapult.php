<?php

namespace Krystal\Katapult;

use Krystal\Katapult\API\KatapultApiInterface;
use Krystal\Katapult\API\ResourceControllerInterface;
use Krystal\Katapult\Resources\DataCenter;
use Krystal\Katapult\Traits\Makeable;

class Katapult
{
    use Makeable;

    private KatapultApiInterface $api;

    public function __construct(KatapultApiInterface $api)
    {
        $this->api = $api;
    }

    public function resource(string $resourceClass, ...$args): ResourceControllerInterface
    {
        return $this->api->getResourceController($resourceClass, ...$args);
    }
}
