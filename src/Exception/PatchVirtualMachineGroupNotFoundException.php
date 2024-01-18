<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class PatchVirtualMachineGroupNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseVirtualMachineGroupNotFoundResponse
     */
    private $responseVirtualMachineGroupNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseVirtualMachineGroupNotFoundResponse $responseVirtualMachineGroupNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No virtual machine group was found matching any of the criteria provided in the arguments');
        $this->responseVirtualMachineGroupNotFoundResponse = $responseVirtualMachineGroupNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseVirtualMachineGroupNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseVirtualMachineGroupNotFoundResponse
    {
        return $this->responseVirtualMachineGroupNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
