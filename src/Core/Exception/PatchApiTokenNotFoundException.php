<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class PatchApiTokenNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseAPITokenNotFoundResponse
     */
    private $responseAPITokenNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseAPITokenNotFoundResponse $responseAPITokenNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No API token was found matching any of the criteria provided in the arguments.');
        $this->responseAPITokenNotFoundResponse = $responseAPITokenNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseAPITokenNotFoundResponse(): \KatapultAPI\Core\Model\ResponseAPITokenNotFoundResponse
    {
        return $this->responseAPITokenNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
