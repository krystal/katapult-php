<?php

namespace Krystal\Katapult\Tests;

use Krystal\Katapult\API\RestfulKatapultApiV1;
use Krystal\Katapult\Katapult;
use Krystal\Katapult\Resources\Organization;

abstract class RestApiTestCase extends TestCase
{
    protected RestfulKatapultApiV1 $katapultApi;
    protected Katapult $katapult;

    protected function setUp(): void
    {
        parent::setUp();

        $this->katapultApi = (new RestfulKatapultApiV1(true))->setAuthenticationToken(getenv('KATAPULT_API_TOKEN'));
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
        $organizations = $this->katapult->resource(Organization::class)->all();
        return reset($organizations);
    }
}


