<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class PostDiskUnassignUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseUnableToUnassignResponse
     */
    private $responseUnableToUnassignResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseUnableToUnassignResponse $responseUnableToUnassignResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('The disk can not be unassigned from the virtual machine.');
        $this->responseUnableToUnassignResponse = $responseUnableToUnassignResponse;
        $this->response = $response;
    }

    public function getResponseUnableToUnassignResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseUnableToUnassignResponse
    {
        return $this->responseUnableToUnassignResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
