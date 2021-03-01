<?php

namespace Krystal\Katapult\Tests\Resources;

use Krystal\Katapult\Resources\DataCenter;
use Krystal\Katapult\Tests\Concerns\Resources\TestsFetchingResource;
use Krystal\Katapult\Tests\Concerns\Resources\TestsListingResource;
use Krystal\Katapult\Tests\RestApiTestCase;

class DataCentresTest extends RestApiTestCase
{
    use TestsListingResource;
    use TestsFetchingResource;

    const RESOURCE = DataCenter::class;
}
