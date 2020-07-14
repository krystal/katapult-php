<?php

namespace Krystal\Katapult\API;

use Krystal\Katapult\Resources\ResourceInterface;

interface ResourceControllerInterface
{
    /**
     * @return array
     */
    public function all();
}
