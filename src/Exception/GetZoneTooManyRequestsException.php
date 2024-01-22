<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class GetZoneTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseAPIAuthenticator429Response
     */
    private $responseAPIAuthenticator429Response;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseAPIAuthenticator429Response $responseAPIAuthenticator429Response, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('You have reached the rate limit for this type of request');
        $this->responseAPIAuthenticator429Response = $responseAPIAuthenticator429Response;
        $this->response = $response;
    }

    public function getResponseAPIAuthenticator429Response(): \Krystal\Katapult\KatapultAPI\Model\ResponseAPIAuthenticator429Response
    {
        return $this->responseAPIAuthenticator429Response;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
