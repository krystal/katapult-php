<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetVirtualMachineNetworkInterfaceAvailableIpsAddressVersionNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseVirtualMachineNetworkInterfaceNotFoundResponse
     */
    private $responseVirtualMachineNetworkInterfaceNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseVirtualMachineNetworkInterfaceNotFoundResponse $responseVirtualMachineNetworkInterfaceNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No network interface was found matching any of the criteria provided in the arguments');
        $this->responseVirtualMachineNetworkInterfaceNotFoundResponse = $responseVirtualMachineNetworkInterfaceNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseVirtualMachineNetworkInterfaceNotFoundResponse(): \KatapultAPI\Core\Model\ResponseVirtualMachineNetworkInterfaceNotFoundResponse
    {
        return $this->responseVirtualMachineNetworkInterfaceNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
