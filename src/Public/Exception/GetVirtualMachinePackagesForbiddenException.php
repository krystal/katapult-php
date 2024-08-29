<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Exception;

class GetVirtualMachinePackagesForbiddenException extends ForbiddenException
{
    /**
     * @var \KatapultAPI\Public\Model\ResponseAPIAuthenticator403Response
     */
    private $responseAPIAuthenticator403Response;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Public\Model\ResponseAPIAuthenticator403Response $responseAPIAuthenticator403Response, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('403 error response');
        $this->responseAPIAuthenticator403Response = $responseAPIAuthenticator403Response;
        $this->response = $response;
    }

    public function getResponseAPIAuthenticator403Response(): \KatapultAPI\Public\Model\ResponseAPIAuthenticator403Response
    {
        return $this->responseAPIAuthenticator403Response;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
