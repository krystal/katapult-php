<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class PostTrashObjectRestoreServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseAPIAuthenticator503Response
     */
    private $responseAPIAuthenticator503Response;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseAPIAuthenticator503Response $responseAPIAuthenticator503Response, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('The service is currently unavailable, please try again later');
        $this->responseAPIAuthenticator503Response = $responseAPIAuthenticator503Response;
        $this->response = $response;
    }

    public function getResponseAPIAuthenticator503Response(): \Krystal\Katapult\KatapultAPI\Model\ResponseAPIAuthenticator503Response
    {
        return $this->responseAPIAuthenticator503Response;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
