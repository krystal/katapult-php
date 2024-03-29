<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class PostOrganizationTrashObjectsPurgeAllNotAcceptableException extends NotAcceptableException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseTaskQueueingErrorResponse
     */
    private $responseTaskQueueingErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseTaskQueueingErrorResponse $responseTaskQueueingErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('This error means that a background task that was needed to complete your request could not be queued');
        $this->responseTaskQueueingErrorResponse = $responseTaskQueueingErrorResponse;
        $this->response = $response;
    }

    public function getResponseTaskQueueingErrorResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseTaskQueueingErrorResponse
    {
        return $this->responseTaskQueueingErrorResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
