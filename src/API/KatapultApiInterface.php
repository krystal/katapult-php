<?php

namespace Krystal\Katapult\API;

interface KatapultApiInterface
{
    public function getResourceController($resourceClass, ...$args);
}
