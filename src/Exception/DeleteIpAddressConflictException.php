<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class DeleteIpAddressConflictException extends ConflictException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseResourceDoesNotSupportUnallocationResponse
     */
    private $responseResourceDoesNotSupportUnallocationResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseResourceDoesNotSupportUnallocationResponse $responseResourceDoesNotSupportUnallocationResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('The resource this IP address belongs to does not allow you to unallocate it.');
        $this->responseResourceDoesNotSupportUnallocationResponse = $responseResourceDoesNotSupportUnallocationResponse;
        $this->response = $response;
    }

    public function getResponseResourceDoesNotSupportUnallocationResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseResourceDoesNotSupportUnallocationResponse
    {
        return $this->responseResourceDoesNotSupportUnallocationResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}