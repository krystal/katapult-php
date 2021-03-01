<?php

namespace Krystal\Katapult\Tests\Concerns\Resources;

trait TestsDeletingResources
{
    public function testCanDeleteResource()
    {
        $resourcesToCreate = 2;

        $resources = $this->createResources($resourcesToCreate);

        $this->assertEquals(count($resources), $resourcesToCreate);

        $deleted = 0;

        foreach ($resources as $resource) {
            $resource->delete();
            $deleted++;
        }

        $this->assertEquals($deleted, count($resources));
    }
}
