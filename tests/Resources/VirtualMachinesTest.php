<?php

namespace Krystal\Katapult\Tests\Resources;

use Exception;
use Krystal\Katapult\Resources\Organization;
use Krystal\Katapult\Resources\Organization\VirtualMachine;
use Krystal\Katapult\Resources\Organization\VirtualMachine\VirtualMachineBuild;
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
 *
 * @todo Power operations
 * @todo Console sessions
 * @todo Package changes
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
    protected function createResource(): VirtualMachine
    {
        /** @var VirtualMachine $resource */
        $resource = $this->createVmsAndWaitUntilReady()[0];

        return $resource;
    }

    protected function createVmsAndWaitUntilReady($total = 1, $waitPerVm = 0, $timeoutPerVm = 10): array
    {
        $vmBuilds = [];

        $packageId = $this->getVirtualMachinePackage()->id;
        $dataCenterId = $this->getFirstDataCenter()->id;

        for($i = 0; $i < $total; $i++) {
            $response = $this->katapult->resource(Organization\VirtualMachine::class, $this->getFirstOrganization())->build([
                'package' => ['id' => $packageId],
                'data_center' => ['id' => $dataCenterId]
            ]);

            $vmBuilds[] = $response->build;
        }

        $vms = [];
        $startedAt = time();

        while(count($vmBuilds) > 0) {

            if($startedAt < (time() - ($total * $timeoutPerVm))) {
                throw new Exception('Timeout exceeded for creating VMs');
            }

            foreach($vmBuilds as $buildIndex => $vmBuild) {
                // Check if the VM is built
                $virtualMachineBuild = $this->katapult->resource(VirtualMachineBuild::class)->get($vmBuild->id);

                // If built, add it to the VMs array and remove the build from the build array
                if($virtualMachineBuild->virtual_machine) {
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
