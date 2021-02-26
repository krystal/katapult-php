<?php

namespace Krystal\Katapult\Tests\Resources;

use Krystal\Katapult\Resources\DataCenter;
use Krystal\Katapult\Resources\Organization;
use Krystal\Katapult\Tests\Concerns\Resources\TestsFetchingResource;
use Krystal\Katapult\Tests\Concerns\Resources\TestsListingResource;
use Krystal\Katapult\Tests\RestApiTestCase;

class OrganizationsTest extends RestApiTestCase
{
    use TestsListingResource;
    use TestsFetchingResource;

    const RESOURCE = Organization::class;
}


