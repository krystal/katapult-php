<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class PostDiskDiskBackupPoliciesNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseDiskNotFoundResponse
     */
    private $responseDiskNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseDiskNotFoundResponse $responseDiskNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No disk was found matching any of the criteria provided in the arguments');
        $this->responseDiskNotFoundResponse = $responseDiskNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseDiskNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseDiskNotFoundResponse
    {
        return $this->responseDiskNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
