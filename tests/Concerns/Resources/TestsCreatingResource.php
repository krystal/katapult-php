<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait TestsCreatingResource
{
    abstract protected function createResources(int $count = 2): array;

    public function testCanCreateResource()
    {
        $resource = $this->createResources(1);

        $this->assertTrue(count($resource) > 0);

        $this->assertTrue(
            is_a($resource[0], static::RESOURCE)
        );
    }
}

