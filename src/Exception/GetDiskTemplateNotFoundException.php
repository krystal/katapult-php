<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class GetDiskTemplateNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseDiskTemplateNotFoundResponse
     */
    private $responseDiskTemplateNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseDiskTemplateNotFoundResponse $responseDiskTemplateNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No disk template was found matching any of the criteria provided in the arguments');
        $this->responseDiskTemplateNotFoundResponse = $responseDiskTemplateNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseDiskTemplateNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseDiskTemplateNotFoundResponse
    {
        return $this->responseDiskTemplateNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
