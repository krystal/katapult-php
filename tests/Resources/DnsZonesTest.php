<?php

namespace Krystal\Katapult\Tests\Resources;

use Krystal\Katapult\Resources\Organization\DNS\DnsZone;
use Krystal\Katapult\Tests\Concerns\Resources\CreateResourcesBeforeTesting;
use Krystal\Katapult\Tests\Concerns\Resources\CreatesResources;
use Krystal\Katapult\Tests\Concerns\Resources\TestsCreatingResource;
use Krystal\Katapult\Tests\Concerns\Resources\TestsDeletingResources;
use Krystal\Katapult\Tests\Concerns\Resources\TestsFetchingResource;
use Krystal\Katapult\Tests\Concerns\Resources\TestsListingResource;
use Krystal\Katapult\Tests\RestApiTestCase;

class DnsZonesTest extends RestApiTestCase
{
    use CreatesResources;
    use CreateResourcesBeforeTesting;
    use TestsListingResource;
    use TestsFetchingResource;
    use TestsCreatingResource;
    use TestsDeletingResources;

    const RESOURCE = DnsZone::class;

    protected function createResource(): DnsZone
    {
        /** @var DnsZone $resource */
        $resource = $this->katapult->resource(static::RESOURCE, $this->getFirstOrganization())->create([
            'details' => ['name' => 'zone-' . self::randomString() . '.co.uk']
        ]);

        return $resource;
    }
}
