<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait TestsFetchingResource
{
    public function testCanFetchResource()
    {
        $resources = $this->katapult->resource(static::RESOURCE, $this->scopeToOrganization())->all();

        $firstResource = reset($resources);
        $fetchedResource = $this->katapult->resource(static::RESOURCE, $this->scopeToOrganization())->get($firstResource->id);

        $this->assertInstanceOf(static::RESOURCE, $fetchedResource);
    }
}

