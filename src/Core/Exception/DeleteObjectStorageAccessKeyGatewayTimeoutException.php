<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class DeleteObjectStorageAccessKeyGatewayTimeoutException extends GatewayTimeoutException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseNetworkErrorResponse
     */
    private $responseNetworkErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseNetworkErrorResponse $responseNetworkErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('A network error occurred while performing the action. Please try again.');
        $this->responseNetworkErrorResponse = $responseNetworkErrorResponse;
        $this->response = $response;
    }

    public function getResponseNetworkErrorResponse(): \KatapultAPI\Core\Model\ResponseNetworkErrorResponse
    {
        return $this->responseNetworkErrorResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
