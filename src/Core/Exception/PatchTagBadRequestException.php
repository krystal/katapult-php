<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class PatchTagBadRequestException extends BadRequestException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response
     */
    private $responseAPIAuthenticator400Response;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response $responseAPIAuthenticator400Response, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No API token was provided in the Authorization header. Ensure a token is provided prefixed with Bearer');
        $this->responseAPIAuthenticator400Response = $responseAPIAuthenticator400Response;
        $this->response = $response;
    }

    public function getResponseAPIAuthenticator400Response(): \KatapultAPI\Core\Model\ResponseAPIAuthenticator400Response
    {
        return $this->responseAPIAuthenticator400Response;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
