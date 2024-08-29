<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetDataCenterNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseDataCenterNotFoundResponse
     */
    private $responseDataCenterNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseDataCenterNotFoundResponse $responseDataCenterNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No data center was found matching any of the criteria provided in the arguments');
        $this->responseDataCenterNotFoundResponse = $responseDataCenterNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseDataCenterNotFoundResponse(): \KatapultAPI\Core\Model\ResponseDataCenterNotFoundResponse
    {
        return $this->responseDataCenterNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}