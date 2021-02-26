<?php

namespace Krystal\Katapult\Tests\Resources;

use Krystal\Katapult\Resources\Organization\ManagedOrganization;
use Krystal\Katapult\Tests\Concerns\Resources\CreatesResources;
use Krystal\Katapult\Tests\Concerns\Resources\TestsCreatingResource;
use Krystal\Katapult\Tests\RestApiTestCase;

class ManagedOrganizationTest extends RestApiTestCase
{
    use CreatesResources;
    use TestsCreatingResource;

    const RESOURCE = ManagedOrganization::class;

    protected function createResource(): ManagedOrganization
    {
        return new ManagedOrganization();
    }
}


