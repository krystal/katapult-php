<?php

namespace Krystal\Katapult\Tests;

use GuzzleHttp\Exception\RequestException;
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

    /**
     * @var Katapult
     */
    private $katapult;

    const TEST_DNS = true;
    const TEST_COMPUTE = true;

    protected function setUp()
    {
        parent::setUp();

        $this->katapultApi = (new RestfulKatapultApiV1())->setAuthenticationToken(getenv('KATAPULT_API_TOKEN'));
        $this->katapult = Katapult::make($this->katapultApi);

        $this->resourceClasses = [
            RestfulKatapultApiV1\Resources\DataCenter::class,
            RestfulKatapultApiV1\Resources\Organization::class,
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

    /**
     * @param Organization $firstOrg
     * @param int $total
     * @param int $timeoutPerVm Timeout in seconds
     * @return VirtualMachine[]
     * @throws \Exception
     */
    protected function createVmsAndWaitUntilReady(Organization $firstOrg, $total = 1, $timeoutPerVm = 10)
    {
        $vmBuilds = [];

        for($i = 0; $total < $i; $i++)
        {
            $response = $this->katapult->resource(Organization\VirtualMachine::class, $firstOrg)->build([
                'package' => ['id' => 'vmpkg_B66yYQl0e3UNTCEa'],
                'data_center' => ['id' => $this->getFirstDataCenter($this->katapult)->id]
            ]);

            $vmBuilds[] = $response->build;
        }

        $vms = [];
        $startedAt = time();

        while(count($vmBuilds) > 0)
        {
            if($startedAt < (time() - ($total * $timeoutPerVm))) throw new \Exception('Timeout exceeded for creating VMs');

            foreach($vmBuilds as $buildIndex => $vmBuild)
            {
                // Check if the VM is built

                // If built, add it to the VMs array and remove the build from the build array
                if(true) // TODO, pending API method to GET VirtualMachineBuild
                {
                    //$vms[] =
                    unset($vmBuilds[$buildIndex]);
                }
            }
        }

        return $vms;
    }

    /** @test */
    public function can_connect_to_api()
    {
        $dataCenters = $this->katapult->resource(DataCenter::class)->all();
        $this->assertTrue(count($dataCenters) > 0);
    }

    /** @test */
    public function can_list_resources()
    {
        foreach($this->resourceClasses as $resourceClass)
        {
            $resources = $this->katapult->resource($resourceClass)->all();
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
            $resources = $this->katapult->resource($resourceClass)->all();

            $firstResource = reset($resources);
            $fetchedResource = $this->katapult->resource($resourceClass)->get($firstResource->id);
            $this->assertTrue(is_a($fetchedResource, $resourceClass));
        }
    }

    /** @test */
    public function can_create_dns_zone()
    {
        if(!self::TEST_DNS) return;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        $zone = $this->katapult->resource(Organization\DNS\DnsZone::class, $firstOrg)->create([
            'details' => ['name' => 'zone-' . time() . '.co.uk']
        ]);

        $this->assertTrue(is_a($zone, Organization\DNS\DnsZone::class));

    }

    /** @test */
    public function can_fetch_dns_zones()
    {
        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        $resources = $this->katapult->resource(Organization\DNS\DnsZone::class, $firstOrg)->all();
        $this->assertTrue(is_array($resources));
    }

    /** @test */
    public function can_create_virtual_machine()
    {
        if(!self::TEST_COMPUTE) return;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        $response = $this->katapult->resource(Organization\VirtualMachine::class, $firstOrg)->build([
            'package' => ['id' => 'vmpkg_B66yYQl0e3UNTCEa'],
            'data_center' => ['id' => $this->getFirstDataCenter($this->katapult)->id]
        ]);

        $this->assertTrue(is_a($response->task, Task::class));
        $this->assertTrue(is_a($response->build, VirtualMachineBuild::class));
    }

    /** @test */
    public function can_create_virtual_machine_from_spec()
    {
        if(!self::TEST_COMPUTE) return;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        $vmBuildSpec = VirtualMachine\DefaultVmBuildSpec::make()
            ->setCpuCores(1)
            ->setMemory(1)
            ->setSystemDiskSize(15)
            ->setSystemDiskSpeed('ssd')
            ->setDatacenterId('loc_gTvEnqqnKohbFBJR')
            ->setPrimaryNetworkId('netw_oNrXAwnkuHddRT6l')
            ->setDiskTemplateId('dtpl_GVkEzWfpEeEvr0RW');

        $response = $this->katapult->resource(Organization\VirtualMachine::class, $firstOrg)->buildFromSpec([
            'xml' => (string)$vmBuildSpec
        ]);

        $this->assertTrue(is_a($response->task, Task::class));
        $this->assertTrue(is_a($response->build, VirtualMachineBuild::class));
    }

    /** @test */
    public function can_fetch_virtual_machines()
    {
        $totalToCreate = 2;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        // Creates VMs to test this method with
        $this->createVmsAndWaitUntilReady($firstOrg, $totalToCreate);

        $resources = $this->katapult->resource(VirtualMachine::class, $firstOrg)->all();
        $this->assertTrue(is_array($resources));
        $this->assertTrue(count($resources) >= $totalToCreate);

        // Test fetching a single VM
        $firstVm = reset($resources);
        if($firstVm)
        {
            $firstVmFetched = $this->katapult->resource(VirtualMachine::class)->get($firstVm->id);
            $this->assertTrue(is_a($firstVmFetched, VirtualMachine::class));
        }
    }

    /** @test */
    public function can_perform_power_operations_on_virtual_machines()
    {
        if(!self::TEST_COMPUTE) return;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        $powerFunctionsToTest = [
            (object)[
                'test' => ['start'],
                'precedeWith' => ['stop']
            ],

            (object)[
                'test' => ['stop'],
                'precedeWith' => ['start']
            ],

            (object)[
                'test' => ['shutdown'],
                'precedeWith' => ['start']
            ],

            (object)[
                'test' => ['reset'],
                'precedeWith' => ['start']
            ],
        ];

        $vms = $this->createVmsAndWaitUntilReady($firstOrg, count($powerFunctionsToTest));

        $this->assertSameSize($powerFunctionsToTest, $vms);

        if(count($powerFunctionsToTest) === count($vms))
        {
            foreach($powerFunctionsToTest as $powerTestIndex => $powerTest)
            {
                $vm = $vms[$powerTestIndex];

                $success = 0;
                $failed = 0;

                try
                {
                    foreach($powerTest->precedeWith as $powerOperation)
                    {
                        $vm->{$powerOperation}();
                        $success++;
                    }
                }
                catch(\Exception $e)
                {
                    $failed++;
                }

                $this->assertEquals(count($powerTest->precedeWith), $success);
                $this->assertEquals(0, $failed);

                // Let the operation happen
                sleep(1);

                // Now test the actual operation we're here for
                $success = 0;
                $failed = 0;

                try
                {
                    foreach($powerTest->test as $powerOperation)
                    {
                        $vm->{$powerOperation}();
                        $success++;
                    }
                }
                catch(\Exception $e)
                {
                    $failed++;
                }

                $this->assertEquals(count($powerTest->test), $success);
                $this->assertEquals(0, $failed);
            }
        }
    }

    /** @test */
    public function can_delete_virtual_machines()
    {
        if(!self::TEST_COMPUTE) return;

        $totalToCreate = 1;

        // Give KP a chance to create the VMs and tidy up
        sleep(1);

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        // Create some VMs
        $this->createVmsAndWaitUntilReady($firstOrg, $totalToCreate);
    }

    /** @test */
    public function can_create_console_sessions_for_virtual_machines()
    {
        if(!self::TEST_COMPUTE) return;

        $totalToCreate = 1;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        // Create some VMs
        $vms = $this->createVmsAndWaitUntilReady($firstOrg, $totalToCreate);
        $this->assertCount($totalToCreate, $vms);

        $deleted = 0;
        $failed = 0;

        foreach($resources as $resource)
        {
            try
            {
                $resource->delete();
                $deleted++;
            }
            catch(\Exception $e)
            {
                $failed++;
            }
        }

        $this->assertEquals(count($resources), $deleted);
    }

    /** @test */
    public function can_delete_dns_zones()
    {
        if(!self::TEST_DNS) return;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);
        $resources = [];

        foreach($this->katapult->resource(Organization\DNS\DnsZone::class, $firstOrg)->all() as $resource)
        {
            // We can't delete infrastructure zones, so filter them out
            if(!$resource->infrastructure_zone) $resources[] = $resource;
        }

        $this->assertTrue(count($resources) > 0);

        $deleted = 0;
        $failed = 0;

        foreach($resources as $resource)
        {
            try
            {
                $resource->delete();
                $deleted++;
            }
            catch(\Exception $e)
            {
                $failed++;
            }
        }

        $this->assertEquals(count($resources), $deleted);
        $this->assertEquals(0, $failed);
    }
}







