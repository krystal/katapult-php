<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait CreateResourcesBeforeTesting
{
    abstract protected function createResources(int $count = 2): array;
}
