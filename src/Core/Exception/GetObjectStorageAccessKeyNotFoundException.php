<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetObjectStorageAccessKeyNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseObjectStorageAccessKeyNotFoundResponse
     */
    private $responseObjectStorageAccessKeyNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseObjectStorageAccessKeyNotFoundResponse $responseObjectStorageAccessKeyNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No object storage access key was found matching any of the criteria provided in the arguments.');
        $this->responseObjectStorageAccessKeyNotFoundResponse = $responseObjectStorageAccessKeyNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseObjectStorageAccessKeyNotFoundResponse(): \KatapultAPI\Core\Model\ResponseObjectStorageAccessKeyNotFoundResponse
    {
        return $this->responseObjectStorageAccessKeyNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
