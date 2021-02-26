<?php

namespace Krystal\Katapult\Tests\Resources;

use Krystal\Katapult\Resources\DataCenter;
use Krystal\Katapult\Tests\Concerns\Resources\TestsListingResource;
use Krystal\Katapult\Tests\RestApiTestCase;

class DataCentresTest extends RestApiTestCase
{
    use TestsListingResource;

    const RESOURCE = DataCenter::class;
}


