<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class DeleteVirtualMachineNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseVirtualMachineNotFoundResponse
     */
    private $responseVirtualMachineNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseVirtualMachineNotFoundResponse $responseVirtualMachineNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No virtual machine was found matching any of the criteria provided in the arguments');
        $this->responseVirtualMachineNotFoundResponse = $responseVirtualMachineNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseVirtualMachineNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseVirtualMachineNotFoundResponse
    {
        return $this->responseVirtualMachineNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
