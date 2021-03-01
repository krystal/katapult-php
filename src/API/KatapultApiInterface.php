<?php

namespace Krystal\Katapult\API;

interface KatapultApiInterface
{
    public function getResourceController(string $resourceClass, ...$args): ResourceControllerInterface;
}
