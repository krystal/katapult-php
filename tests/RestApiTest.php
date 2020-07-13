<?php

namespace Krystal\Katapult\Tests;

use Krystal\Katapult\API\RestfulKatapultApiV1;
use Krystal\Katapult\Katapult;
use Krystal\Katapult\Resources\Organization;
use Krystal\Katapult\Resources\Resource;
use Krystal\Katapult\Resources\Organization\VirtualMachine;
use Krystal\Katapult\Resources\Task;
use Krystal\Katapult\Resources\VirtualMachineBuild;
use PHPUnit\Framework\TestCase;

use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\DataCenter;

class RestApiTest extends TestCase
{
    /**
     * @var void
     */
    private $katapultApi;
    /**
     * @var string[]
     */
    private $resourceClasses;

    protected function setUp()
    {
        parent::setUp();

        $this->katapultApi = (new RestfulKatapultApiV1())->setAuthenticationToken(getenv('KATAPULT_API_TOKEN'));

        $this->resourceClasses = [
            RestfulKatapultApiV1\Resources\DataCenter::class,
            //RestfulKatapultApiV1\Resources\Organization::class, // Removed tmp, pending the API bug being fixed
        ];
    }

    /**
     * @param Katapult $katapult
     * @return Organization
     */
    protected static function getFirstOrganization(Katapult $katapult)
    {
        // First we need to fetch an org, so we can fetch it's resources
        $organizations = $katapult->resource(Organization::class)->all();
        return reset($organizations);
    }

    /**
     * @param Katapult $katapult
     * @return \Krystal\Katapult\Resources\DataCenter
     */
    protected static function getFirstDataCenter(Katapult $katapult)
    {
        // First we need to fetch an org, so we can fetch it's resources
        $dataCenters = $katapult->resource(DataCenter::class)->all();
        return reset($dataCenters);
    }

    /** @test */
    public function can_connect_to_api()
    {
        $katapult = Katapult::make($this->katapultApi);
        $dataCenters = $katapult->resource(DataCenter::class)->all();
        $this->assertTrue(count($dataCenters) > 0);
    }

    /** @test */
    public function can_list_resources()
    {
        foreach($this->resourceClasses as $resourceClass)
        {
            $katapult = Katapult::make($this->katapultApi);
            $resources = $katapult->resource($resourceClass)->all();
            $this->assertTrue(is_array($resources));
            $this->assertTrue(count($resources) > 0);

            foreach($resources as $resource)
            {
                $this->assertTrue(is_a($resource, $resourceClass));
            }
        }
    }

    /** @test */
    public function can_get_single_resources()
    {
        foreach($this->resourceClasses as $resourceClass)
        {
            $katapult = Katapult::make($this->katapultApi);
            $resources = $katapult->resource($resourceClass)->all();

            $firstResource = reset($resources);
            $fetchedResource = $katapult->resource($resourceClass)->get($firstResource->id);
            $this->assertTrue(is_a($fetchedResource, $resourceClass));
        }
    }

    /** @test */
    public function can_fetch_virtual_machines()
    {
        $katapult = Katapult::make($this->katapultApi);

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($katapult);

        $resources = $katapult->resource(VirtualMachine::class, $firstOrg)->all();
        $this->assertTrue(is_array($resources));
    }

    /** @test */
    public function can_create_dns_zone()
    {
        /*
         * DNS zone bug in staging is preventing testing this
         *
        $katapult = Katapult::make($this->katapultApi);

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($katapult);

        $zone = $katapult->resource(Organization\DNS\DnsZone::class, $firstOrg)->create([
            'name' => 'zone-' . time() . '.co.uk'
        ]);

        $this->assertTrue(is_a($zone, Organization\DNS\DnsZone::class));
        */
    }

    /** @test */
    public function cam_fetch_dns_zones()
    {
        $katapult = Katapult::make($this->katapultApi);

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($katapult);


        $resources = $katapult->resource(Organization\DNS\DnsZone::class, $firstOrg)->all();
        $this->assertTrue(is_array($resources));
    }

    /** @test */
    public function can_create_virtual_machine()
    {
        $katapult = Katapult::make($this->katapultApi);

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($katapult);

        $response = $katapult->resource(Organization\VirtualMachine::class, $firstOrg)->build([
            'package' => ['id' => 'vmpkg_B66yYQl0e3UNTCEa'],
            'data_center' => ['id' => $this->getFirstDataCenter($katapult)->id]
        ]);

        $this->assertTrue(is_a($response->task, Task::class));
        $this->assertTrue(is_a($response->build, VirtualMachineBuild::class));
    }
}







