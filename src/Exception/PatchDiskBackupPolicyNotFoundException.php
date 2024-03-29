<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class PatchDiskBackupPolicyNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseDiskBackupPolicyNotFoundResponse
     */
    private $responseDiskBackupPolicyNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseDiskBackupPolicyNotFoundResponse $responseDiskBackupPolicyNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No disk backup policy was found matching any of the criteria provided in the arguments');
        $this->responseDiskBackupPolicyNotFoundResponse = $responseDiskBackupPolicyNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseDiskBackupPolicyNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseDiskBackupPolicyNotFoundResponse
    {
        return $this->responseDiskBackupPolicyNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
