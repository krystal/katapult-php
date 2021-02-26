<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait TestsListingResource
{
    public function testCanListResource()
    {
        $resources = $this->katapult->resource(static::RESOURCE)->all();

        $this->assertTrue(is_array($resources));
        $this->assertTrue(count($resources) > 0);

        foreach($resources as $resource) {
            $this->assertInstanceOf(static::RESOURCE, $resource);
        }
    }
}

