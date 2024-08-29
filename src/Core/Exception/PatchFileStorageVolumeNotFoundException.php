<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class PatchFileStorageVolumeNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseFileStorageVolumeNotFoundResponse
     */
    private $responseFileStorageVolumeNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseFileStorageVolumeNotFoundResponse $responseFileStorageVolumeNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No file storage volume was found matching any of the criteria provided in the arguments.');
        $this->responseFileStorageVolumeNotFoundResponse = $responseFileStorageVolumeNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseFileStorageVolumeNotFoundResponse(): \KatapultAPI\Core\Model\ResponseFileStorageVolumeNotFoundResponse
    {
        return $this->responseFileStorageVolumeNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}