<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetGpuTypeNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseGPUTypeNotFoundResponse
     */
    private $responseGPUTypeNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseGPUTypeNotFoundResponse $responseGPUTypeNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No GPU type was found matching any of the criteria provided in the arguments');
        $this->responseGPUTypeNotFoundResponse = $responseGPUTypeNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseGPUTypeNotFoundResponse(): \KatapultAPI\Core\Model\ResponseGPUTypeNotFoundResponse
    {
        return $this->responseGPUTypeNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
