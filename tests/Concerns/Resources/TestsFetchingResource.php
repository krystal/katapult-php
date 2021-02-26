<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait TestsFetchingResource
{
    public function testCanFetchResource()
    {
        $resources = $this->katapult->resource(static::RESOURCE)->all();

        $firstResource = reset($resources);
        $fetchedResource = $this->katapult->resource(static::RESOURCE)->get($firstResource->id);

        $this->assertInstanceOf(static::RESOURCE, $fetchedResource);
    }
}

