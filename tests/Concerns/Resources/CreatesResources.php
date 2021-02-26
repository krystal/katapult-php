<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait CreatesResources
{
    abstract protected function createResource();

    protected function createResources(int $count = 2): array
    {
        $resources = [];

        for($i = 0; $i < $count; $i++) {
            $resources[] = $this->createResource();
        }

        return $resources;
    }
}

