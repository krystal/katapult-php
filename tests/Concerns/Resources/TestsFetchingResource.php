<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait TestsFetchingResource
{
    public function testCanFetchResource()
    {
        if ($this->hasTrait(CreateResourcesBeforeTesting::class)) {
            $this->createResources();
        }

        $firstResource = $this->katapult->resource(static::RESOURCE, $this->scopeToOrganization())->first();

        $fetchedResource = $this->katapult->resource(static::RESOURCE)->get($firstResource->id);

        $this->assertInstanceOf(static::RESOURCE, $fetchedResource);
    }
}

