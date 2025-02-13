<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class PostVirtualMachineNetworkInterfaceAttachUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseVirtualMachineNetworkInterfaceAlreadyAttachedResponse
     */
    private $responseVirtualMachineNetworkInterfaceAlreadyAttachedResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseVirtualMachineNetworkInterfaceAlreadyAttachedResponse $responseVirtualMachineNetworkInterfaceAlreadyAttachedResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('The virtual machine network interface is already attached to the virtual machine');
        $this->responseVirtualMachineNetworkInterfaceAlreadyAttachedResponse = $responseVirtualMachineNetworkInterfaceAlreadyAttachedResponse;
        $this->response = $response;
    }

    public function getResponseVirtualMachineNetworkInterfaceAlreadyAttachedResponse(): \KatapultAPI\Core\Model\ResponseVirtualMachineNetworkInterfaceAlreadyAttachedResponse
    {
        return $this->responseVirtualMachineNetworkInterfaceAlreadyAttachedResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
