<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class PatchObjectStorageObjectStorageClusterBucketNotAcceptableException extends NotAcceptableException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseObjectInTrashResponse
     */
    private $responseObjectInTrashResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseObjectInTrashResponse $responseObjectInTrashResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('The object found is in the trash and therefore cannot be manipulated through the API. It should be restored in order to run this operation.');
        $this->responseObjectInTrashResponse = $responseObjectInTrashResponse;
        $this->response = $response;
    }

    public function getResponseObjectInTrashResponse(): \KatapultAPI\Core\Model\ResponseObjectInTrashResponse
    {
        return $this->responseObjectInTrashResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
