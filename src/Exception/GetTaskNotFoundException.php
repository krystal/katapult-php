<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class GetTaskNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseTaskNotFoundResponse
     */
    private $responseTaskNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseTaskNotFoundResponse $responseTaskNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No task was found matching any of the criteria provided in the arguments');
        $this->responseTaskNotFoundResponse = $responseTaskNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseTaskNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseTaskNotFoundResponse
    {
        return $this->responseTaskNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
