<?php

namespace Krystal\Katapult\Tests;

use Krystal\Katapult\API\RestfulKatapultApiV1;
use Krystal\Katapult\Katapult;
use Krystal\Katapult\Resources\DataCenter;
use Krystal\Katapult\Resources\Organization;
use Krystal\Katapult\Resources\VirtualMachinePackage;

abstract class RestApiTestCase extends TestCase
{
    protected RestfulKatapultApiV1 $katapultApi;
    protected Katapult $katapult;

    protected function setUp(): void
    {
        parent::setUp();

        $this->katapultApi = new RestfulKatapultApiV1(
            getenv('KATAPULT_API_TOKEN')
        );

        $this->katapult = Katapult::make($this->katapultApi);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        $resources = $this->katapult->resource(static::RESOURCE, $this->getFirstOrganization())->all();

        foreach ($resources as $resource) {
            try {
                $resource->delete();
            } catch (\Throwable $e) {
                //
            }
        }
    }

    protected function getFirstOrganization(): Organization
    {
        return $this->katapult->resource(Organization::class)->first();
    }

    protected function getFirstDataCenter(): DataCenter
    {
        return $this->katapult->resource(DataCenter::class)->first();
    }

    protected function getVirtualMachinePackage(): VirtualMachinePackage
    {
        return $this->katapult->resource(VirtualMachinePackage::class)->first();
    }

    protected function scopeToOrganization(): ? Organization
    {
        $resourceClass = static::RESOURCE;

        if (!(new $resourceClass)->resourceIsScopedByOrganization()) {
            return null;
        }

        return $this->getFirstOrganization();
    }
}
