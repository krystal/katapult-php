<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class PatchDiskBackupPolicyUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseValidationErrorResponse
     */
    private $responseValidationErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseValidationErrorResponse $responseValidationErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('A validation error occurred with the object that was being created/updated/deleted');
        $this->responseValidationErrorResponse = $responseValidationErrorResponse;
        $this->response = $response;
    }

    public function getResponseValidationErrorResponse(): \KatapultAPI\Core\Model\ResponseValidationErrorResponse
    {
        return $this->responseValidationErrorResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
