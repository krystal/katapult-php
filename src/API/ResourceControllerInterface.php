<?php

namespace Krystal\Katapult\API;

use Krystal\Katapult\Resources\ResourceInterface;

interface ResourceControllerInterface
{
    public function all(): array;
    public function first(): ? ResourceInterface;
}
