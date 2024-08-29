<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class DeleteDiskNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseDiskNotFoundResponse
     */
    private $responseDiskNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseDiskNotFoundResponse $responseDiskNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No disk was found matching any of the criteria provided in the arguments');
        $this->responseDiskNotFoundResponse = $responseDiskNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseDiskNotFoundResponse(): \KatapultAPI\Core\Model\ResponseDiskNotFoundResponse
    {
        return $this->responseDiskNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
