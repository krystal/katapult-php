<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetDiskTemplateVersionNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseDiskTemplateVersionNotFoundResponse
     */
    private $responseDiskTemplateVersionNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseDiskTemplateVersionNotFoundResponse $responseDiskTemplateVersionNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No disk template version was found matching any of the criteria provided in the arguments');
        $this->responseDiskTemplateVersionNotFoundResponse = $responseDiskTemplateVersionNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseDiskTemplateVersionNotFoundResponse(): \KatapultAPI\Core\Model\ResponseDiskTemplateVersionNotFoundResponse
    {
        return $this->responseDiskTemplateVersionNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}