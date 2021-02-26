<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait TestsListingResource
{
    public function testCanListResource()
    {
        if ($this->hasTrait(CreateResourcesBeforeTesting::class)) {
            $this->createResources();
        }

        $resources = $this->katapult->resource(static::RESOURCE)->all();

        $this->assertTrue(is_array($resources));
        $this->assertTrue(count($resources) > 0);

        foreach($resources as $resource) {
            $this->assertInstanceOf(static::RESOURCE, $resource);
        }
    }

    public function testCanFetchFirstResource()
    {
        if ($this->hasTrait(CreateResourcesBeforeTesting::class)) {
            $this->createResources();
        }

        $resource = $this->katapult->resource(static::RESOURCE)->first();

        $this->assertInstanceOf(static::RESOURCE, $resource);
    }
}

