<?php

namespace Krystal\Katapult\Tests\Resources;

use Exception;
use GuzzleHttp\Exception\RequestException;
use Krystal\Katapult\API\RestfulKatapultApiV1\Resources\Organization\VirtualMachine as ApiV1VirtualMachine;
use Krystal\Katapult\Resources\Organization;
use Krystal\Katapult\Resources\Organization\VirtualMachine;
use Krystal\Katapult\Resources\Organization\VirtualMachine\VirtualMachineBuild;
use Krystal\Katapult\Resources\VirtualMachinePackage;
use Krystal\Katapult\Tests\Concerns\Resources\CreateResourcesBeforeTesting;
use Krystal\Katapult\Tests\Concerns\Resources\CreatesResources;
use Krystal\Katapult\Tests\Concerns\Resources\TestsCreatingResource;
use Krystal\Katapult\Tests\Concerns\Resources\TestsDeletingResources;
use Krystal\Katapult\Tests\Concerns\Resources\TestsFetchingResource;
use Krystal\Katapult\Tests\Concerns\Resources\TestsListingResource;
use Krystal\Katapult\Tests\RestApiTestCase;

/**
 * Class VirtualMachinesTest
 * @package Krystal\Katapult\Tests\Resources
 */
class VirtualMachinesTest extends RestApiTestCase
{
    use CreatesResources;
    use CreateResourcesBeforeTesting;
    use TestsCreatingResource;
    use TestsFetchingResource;
    use TestsListingResource;
    use TestsDeletingResources;

    const RESOURCE = VirtualMachine::class;

    /**
     * @throws Exception
     */
    public function testConsoleSessionCanBeCreated()
    {
        $vm = $this->createResource();

        // Start the VM and wait for it to come online
        if ($vm->state !== VirtualMachine::STATE_STARTED) {
            $this->executeVmPowerOperationAndWaitUntilComplete($vm, ApiV1VirtualMachine::ACTION_START);
        }

        $consoleSession = $vm->createConsoleSession();

        $this->assertInstanceOf(VirtualMachine\ConsoleSession::class, $consoleSession);
    }

    /**
     * @throws Exception
     */
    public function testVmPackageCanBeChanged()
    {
        $vm = $this->createResource();

        // Start the VM and wait for it to come online
        if ($vm->state !== VirtualMachine::STATE_STARTED) {
            $this->executeVmPowerOperationAndWaitUntilComplete($vm, ApiV1VirtualMachine::ACTION_START);
        }

        $vmPackages = $this->katapult->resource(VirtualMachinePackage::class)->all();

        foreach ($vmPackages as $vmPackage) {
            if ($vmPackage->id === $vm->package->id) {
                continue;
            }

            $vmPackageToUse = $vmPackage;
            break;
        }

        $this->assertTrue(
            isset($vmPackageToUse)
        );

        $this->assertTrue(
            !!$vm->changePackage(['id' => $vmPackageToUse->id])
        );
    }

    /**
     * @throws Exception
     */
    public function testVmCanBeStarted()
    {
        $vm = $this->createResource();

        $this->executeVmPowerOperationAndWaitUntilComplete($vm, ApiV1VirtualMachine::ACTION_STOP);

        // Kind of useless, we'd get an exception if we didn't run it successfully
        $this->assertTrue(
            !!$vm->start()
        );
    }

    /**
     * @throws Exception
     */
    public function testVmCanBeStopped()
    {
        $vm = $this->createResource();

        $this->executeVmPowerOperationAndWaitUntilComplete($vm, ApiV1VirtualMachine::ACTION_START);

        // Kind of useless, we'd get an exception if we didn't run it successfully
        $this->assertTrue(
            !!$vm->stop()
        );
    }

    /**
     * @throws Exception
     */
    public function testVmCanBeShutdown()
    {
        $vm = $this->createResource();

        $this->executeVmPowerOperationAndWaitUntilComplete($vm, ApiV1VirtualMachine::ACTION_START);

        // Kind of useless, we'd get an exception if we didn't run it successfully
        $this->assertTrue(
            !!$vm->shutdown()
        );
    }

    /**
     * @throws Exception
     */
    public function testVmCanBeReset()
    {
        $vm = $this->createResource();

        $this->executeVmPowerOperationAndWaitUntilComplete($vm, ApiV1VirtualMachine::ACTION_START);

        // Kind of useless, we'd get an exception if we didn't run it successfully
        $this->assertTrue(
            !!$vm->reset()
        );
    }

    /**
     * @throws Exception
     */
    protected function createResource(): VirtualMachine
    {
        /** @var VirtualMachine $resource */
        $resource = $this->createVmsAndWaitUntilReady()[0];

        return $resource;
    }

    /**
     * @param VirtualMachine $virtualMachine
     * @param string $powerOperation
     * @param bool $justWait - If true, just wait for the expected state, don't request it from Katapult
     * @throws Exception
     */
    protected function executeVmPowerOperationAndWaitUntilComplete(VirtualMachine $virtualMachine, string $powerOperation, bool $justWait = false)
    {
        if (!$justWait) {
            try {
                $virtualMachine->{$powerOperation}();
            } catch (RequestException $e) {
                // Account for the VM being unable to transition to a state because it's already there. These are pre-flight checks. And these are just preceding calls for the actual power function test
                // Rethrow the exception if it's not the error we're expecting.
                if (strpos($e->getResponse()->getBody(), 'machine cannot transition') === false) {
                    throw $e;
                }
            }
        }

        switch ($powerOperation) {
            case ApiV1VirtualMachine::ACTION_START:
            case ApiV1VirtualMachine::ACTION_RESET:
                $expectedState = VirtualMachine::STATE_STARTED;
                break;

            case ApiV1VirtualMachine::ACTION_SHUTDOWN:
            case ApiV1VirtualMachine::ACTION_STOP:
                $expectedState = VirtualMachine::STATE_STOPPED;
                break;

            default:
                throw new Exception('Unexpected action');
        }

        while (true) {
            if ($this->katapult->resource(VirtualMachine::class)->get($virtualMachine->id)->state === $expectedState) {
                return;
            }

            sleep(1);
        }
    }

    protected function createVmsAndWaitUntilReady($total = 1, $waitPerVm = 5, $timeoutPerVm = 10): array
    {
        $vmBuilds = [];

        $packageId = $this->getVirtualMachinePackage()->id;
        $dataCenterId = $this->getFirstDataCenter()->id;

        for ($i = 0; $i < $total; $i++) {
            $response = $this->katapult->resource(Organization\VirtualMachine::class, $this->getFirstOrganization())->build([
                'package' => ['id' => $packageId],
                'data_center' => ['id' => $dataCenterId]
            ]);

            $vmBuilds[] = $response->build;
        }

        $vms = [];
        $startedAt = time();

        while (count($vmBuilds) > 0) {
            if ($startedAt < (time() - ($total * $timeoutPerVm))) {
                throw new Exception('Timeout exceeded for creating VMs');
            }

            foreach ($vmBuilds as $buildIndex => $vmBuild) {
                // Check if the VM is built
                $virtualMachineBuild = $this->katapult->resource(VirtualMachineBuild::class)->get($vmBuild->id);

                // If built, add it to the VMs array and remove the build from the build array
                if ($virtualMachineBuild->virtual_machine) {
                    $vms[] = $this->katapult->resource(VirtualMachine::class)->get($virtualMachineBuild->virtual_machine->id);
                    unset($vmBuilds[$buildIndex]);
                }
            }

            sleep(1);
        }

        sleep($total * $waitPerVm);

        return $vms;
    }
}
