<?php

namespace Krystal\Katapult\Tests\Resources;

use Krystal\Katapult\Resources\VirtualMachinePackage;
use Krystal\Katapult\Tests\Concerns\Resources\TestsFetchingResource;
use Krystal\Katapult\Tests\Concerns\Resources\TestsListingResource;
use Krystal\Katapult\Tests\RestApiTestCase;

class VirtualMachinePackagesTest extends RestApiTestCase
{
    use TestsListingResource;
    use TestsFetchingResource;

    const RESOURCE = VirtualMachinePackage::class;
}
