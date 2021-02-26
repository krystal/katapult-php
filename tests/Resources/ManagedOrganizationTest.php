<?php

namespace Krystal\Katapult\Tests\Resources;

use Krystal\Katapult\Resources\Organization\ManagedOrganization;
use Krystal\Katapult\Tests\Concerns\Resources\CreateResourcesBeforeTesting;
use Krystal\Katapult\Tests\Concerns\Resources\TestsCreatingResource;
use Krystal\Katapult\Tests\Concerns\Resources\TestsListingResource;
use Krystal\Katapult\Tests\RestApiTestCase;

class ManagedOrganizationTest extends RestApiTestCase
{
    use CreateResourcesBeforeTesting;
    use TestsListingResource;
    use TestsCreatingResource;

    const RESOURCE = ManagedOrganization::class;

    protected function createResources(int $count = 2): array
    {
        $createdResources = [];

        for($i = 0; $i < $count; $i++) {
            $orgKey = 'php-lib-test-' . time();

            $createdResources[] = $this->katapult->resource(static::RESOURCE, $this->getFirstOrganization())->create([
                'name' => $orgKey,
                'sub_domain' => $orgKey
            ]);
        }

        return $createdResources;
    }
}


