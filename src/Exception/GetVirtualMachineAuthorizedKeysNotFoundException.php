<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class GetVirtualMachineAuthorizedKeysNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseNoVirtualMachineForAPITokenResponse
     */
    private $responseNoVirtualMachineForAPITokenResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseNoVirtualMachineForAPITokenResponse $responseNoVirtualMachineForAPITokenResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No virtual machine was found for the provided API token');
        $this->responseNoVirtualMachineForAPITokenResponse = $responseNoVirtualMachineForAPITokenResponse;
        $this->response = $response;
    }

    public function getResponseNoVirtualMachineForAPITokenResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseNoVirtualMachineForAPITokenResponse
    {
        return $this->responseNoVirtualMachineForAPITokenResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}