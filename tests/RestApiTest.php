<?php

namespace Krystal\Katapult\Tests;

use GuzzleHttp\Exception\RequestException;
use Krystal\Katapult\API\RestfulKatapultApiV1;
use Krystal\Katapult\Katapult;
use Krystal\Katapult\Resources\Organization;
use Krystal\Katapult\Resources\Resource;
use Krystal\Katapult\Resources\Organization\VirtualMachine;
use Krystal\Katapult\Resources\Task;
use PHPUnit\Framework\TestCase;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\DataCenter;
use Krystal\Katapult\Resources\Organization\VirtualMachine\VirtualMachineBuild;

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

    /**
     * @var string[]
     */
    private $orgDependendeptResourceClasses;

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
            RestfulKatapultApiV1\Resources\VirtualMachinePackage::class,
        ];

        $this->orgDependendeptResourceClasses = [
            RestfulKatapultApiV1\Resources\DiskTemplate::class,
        ];
    }

    protected function tearDown()
    {
        parent::tearDown();

        $firstOrg = self::getFirstOrganization($this->katapult);

        $resources = $this->katapult->resource(VirtualMachine::class, $firstOrg)->all();

        foreach($resources as $resource)
        {
            try
            {
                $resource->delete();
            }
            catch(\Exception $e)
            {
                //
            }
        }
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
     * @param int $waitPerVm
     * @param int $timeoutPerVm Timeout in seconds
     * @return VirtualMachine[]
     * @throws \Exception
     */
    protected function createVmsAndWaitUntilReady(Organization $firstOrg, $total = 1, $waitPerVm = 5, $timeoutPerVm = 10)
    {
        $vmBuilds = [];

        for($i = 0; $i < $total; $i++)
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
                $virtualMachineBuild = $this->katapult->resource(VirtualMachineBuild::class)->get($vmBuild->id);

                // If built, add it to the VMs array and remove the build from the build array
                if($virtualMachineBuild->virtual_machine)
                {
                    $vms[] = $this->katapult->resource(VirtualMachine::class)->get($virtualMachineBuild->virtual_machine->id);
                    unset($vmBuilds[$buildIndex]);
                }
            }

            sleep(1);
        }

        sleep($total * $waitPerVm);

        return $vms;
    }

    protected function executeVmPowerOperationAndWaitUntilCompleted(RestfulKatapultApiV1\Resources\Organization\VirtualMachine $virtualMachine, $powerOperation, $justWait = false)
    {
        if(!$justWait) $virtualMachine->{$powerOperation}();

        switch($powerOperation)
        {
            case RestfulKatapultApiV1\Resources\Organization\VirtualMachine::ACTION_START:
            case RestfulKatapultApiV1\Resources\Organization\VirtualMachine::ACTION_RESET:
                $expectedState = 'started';
                break;

            case RestfulKatapultApiV1\Resources\Organization\VirtualMachine::ACTION_SHUTDOWN:
            case RestfulKatapultApiV1\Resources\Organization\VirtualMachine::ACTION_STOP:
                $expectedState = 'stopped';
                break;
        }

        while(true)
        {
            if($this->katapult->resource(VirtualMachine::class)->get($virtualMachine->id)->state == $expectedState) return;
            sleep(1);
        }
    }

    /** @test */
    public function can_connect_to_api()
    {
        $dataCenters = $this->katapult->resource(DataCenter::class)->all();
        $this->assertTrue(count($dataCenters) > 0);
    }

    /** @test */
    public function can_create_managed_organization()
    {
        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        $orgKey = 'php-lib-test-' . time();

        $managedOrg = $this->katapult->resource(Organization\ManagedOrganization::class, $firstOrg)->create([
            'name' => $orgKey,
            'sub_domain' => $orgKey
        ]);

        $this->assertInstanceOf(Organization\ManagedOrganization::class, $managedOrg);
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
                $this->assertInstanceOf($resourceClass, $resource);
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
            $this->assertInstanceOf($resourceClass, $fetchedResource);
        }
    }

    /** @test */
    public function can_get_first_of_resource()
    {
        foreach($this->resourceClasses as $resourceClass)
        {
            $resource = $this->katapult->resource($resourceClass)->first();
            $this->assertInstanceOf($resourceClass, $resource);
        }
    }

    /** @test */
    public function can_list_organization_resources()
    {
        $firstOrg = self::getFirstOrganization($this->katapult);

        foreach($this->orgDependendeptResourceClasses as $resourceClass)
        {
            $resources = $this->katapult->resource($resourceClass, $firstOrg)->all();
            $this->assertTrue(is_array($resources));
            $this->assertTrue(count($resources) > 0);

            foreach($resources as $resource)
            {
                $this->assertInstanceOf($resourceClass, $resource);
            }
        }
    }

    /** @test */
    public function can_get_single_organization_resources()
    {
        $firstOrg = self::getFirstOrganization($this->katapult);

        foreach($this->orgDependendeptResourceClasses as $resourceClass)
        {
            // Certain resources cannot be fetched individually
            if(in_array($resourceClass, [
                RestfulKatapultApiV1\Resources\DiskTemplate::class,
            ])) continue;

            $resources = $this->katapult->resource($resourceClass, $firstOrg)->all();

            $firstResource = reset($resources);
            $fetchedResource = $this->katapult->resource($resourceClass)->get($firstResource->id);
            $this->assertInstanceOf($resourceClass, $fetchedResource);
        }
    }

    /** @test */
    public function can_get_first_of_organization_resource()
    {
        $firstOrg = self::getFirstOrganization($this->katapult);

        foreach($this->orgDependendeptResourceClasses as $resourceClass)
        {
            $resource = $this->katapult->resource($resourceClass, $firstOrg)->first();
            $this->assertInstanceOf($resourceClass, $resource);
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

        $this->assertInstanceOf(Organization\DNS\DnsZone::class, $zone);
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

        $this->assertInstanceOf(Task::class, $response->task);
        $this->assertInstanceOf(VirtualMachineBuild::class, $response->build);
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

        $this->assertInstanceOf(Task::class, $response->task);
        $this->assertInstanceOf(VirtualMachineBuild::class, $response->build);
    }

    /** @test */
    public function can_fetch_virtual_machines()
    {
        $totalToCreate = 2;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        // Creates VMs to test this method with
        $this->createVmsAndWaitUntilReady($firstOrg, $totalToCreate, 0);

        $resources = $this->katapult->resource(VirtualMachine::class, $firstOrg)->all();
        $this->assertTrue(is_array($resources));
        $this->assertTrue(count($resources) >= $totalToCreate);

        // Test fetching a single VM
        $firstVm = reset($resources);
        if($firstVm)
        {
            $firstVmFetched = $this->katapult->resource(VirtualMachine::class)->get($firstVm->id);
            $this->assertInstanceOf(VirtualMachine::class, $firstVmFetched);
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

                foreach($powerTest->precedeWith as $powerOperation)
                {
                    try
                    {
                        try
                        {
                            $this->executeVmPowerOperationAndWaitUntilCompleted($vm, $powerOperation);
                            $success++;
                        }
                        catch(RequestException $e)
                        {
                            // Account for the VM being unable to transition to a state because it's already there. These are pre-flight checks. And these are just preceding calls for the actual power function test
                            if(strpos($e->getResponse()->getBody(), 'machine cannot transition') !== false)
                            {
                                $success++;
                            }
                            else
                            {
                                throw $e;
                            }
                        }
                    }
                    catch(\Exception $e)
                    {
                        $failed++;
                    }
                }

                $this->assertEquals(count($powerTest->precedeWith), $success);
                $this->assertEquals(0, $failed);

                // Let the operation happen
                sleep(5);

                // Now test the actual operation we're here for
                $success = 0;
                $failed = 0;

                foreach($powerTest->test as $powerOperation)
                {
                    try
                    {
                        $vm->{$powerOperation}();
                        $success++;
                    }
                    catch(\Exception $e)
                    {
                        $failed++;
                    }
                }

                $this->assertEquals(count($powerTest->test), $success);
                $this->assertEquals(0, $failed);
            }
        }
    }

    /** @test */
    public function can_create_console_sessions_for_virtual_machines()
    {
        if(!self::TEST_COMPUTE) return;

        $totalToCreate = 1;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        // Create some VMs
        $resources = $this->createVmsAndWaitUntilReady($firstOrg, $totalToCreate);
        $this->assertCount($totalToCreate, $resources);

        $success = 0;
        $failed = 0;

        foreach($resources as $resource)
        {
            try
            {
                // Start the VM and wait for it to come online
                if($resource->state != 'started') $this->executeVmPowerOperationAndWaitUntilCompleted($resource, RestfulKatapultApiV1\Resources\Organization\VirtualMachine::ACTION_START);

                $consoleSession = $resource->createConsoleSession();
                $this->assertInstanceOf(VirtualMachine\ConsoleSession::class, $consoleSession);
                $this->assertTrue(strlen($consoleSession->url) > 15);
                $success++;
            }
            catch(\Exception $e)
            {
                $failed++;
            }
        }

        $this->assertEquals(count($resources), $success);
        $this->assertLessThanOrEqual(0, $failed);
    }

    /** @test */
    public function can_change_virtual_machine_packages()
    {
        if(!self::TEST_COMPUTE) return;

        $totalToCreate = 1;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        // Create some VMs
        $resources = $this->createVmsAndWaitUntilReady($firstOrg, $totalToCreate);
        $this->assertCount($totalToCreate, $resources);

        $success = 0;
        $failed = 0;

        foreach($resources as $resource)
        {
            try
            {
                // Start the VM and wait for it to come online
                if($resource->state != 'started') $this->executeVmPowerOperationAndWaitUntilCompleted($resource, RestfulKatapultApiV1\Resources\Organization\VirtualMachine::ACTION_START);

                $resource->changePackage(['id' => 'vmpkg_NZ9vnAhUyUlanf65']);
                $success++;
            }
            catch(\Exception $e)
            {
                $failed++;
            }
        }

        $this->assertEquals(count($resources), $success);
        $this->assertLessThanOrEqual(0, $failed);
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

    /** @test */
    public function can_delete_virtual_machines()
    {
        if(!self::TEST_COMPUTE) return;

        $totalToCreate = 1;

        // First we need to fetch an org, so we can fetch it's resources
        $firstOrg = self::getFirstOrganization($this->katapult);

        // Create some VMs
        $resources = $this->createVmsAndWaitUntilReady($firstOrg, $totalToCreate, 0);
        $this->assertCount($totalToCreate, $resources);

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







