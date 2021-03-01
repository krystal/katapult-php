<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait TestsCreatingResource
{
    abstract protected function createResource();

    public function testCanCreateResource()
    {
        $resource = $this->createResource();

        $this->assertTrue(
            is_a($resource, static::RESOURCE)
        );
    }
}
