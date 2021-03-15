<?php

namespace Krystal\Katapult\Tests\Resources;

use Krystal\Katapult\Resources\Organization\DiskTemplate;
use Krystal\Katapult\Tests\Concerns\Resources\TestsFetchingResource;
use Krystal\Katapult\Tests\Concerns\Resources\TestsListingResource;
use Krystal\Katapult\Tests\RestApiTestCase;

class DiskTemplatesTest extends RestApiTestCase
{
    use TestsListingResource;
    use TestsFetchingResource;

    const RESOURCE = DiskTemplate::class;
}
