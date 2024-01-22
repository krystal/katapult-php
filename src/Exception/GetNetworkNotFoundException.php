<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class GetNetworkNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseNetworkNotFoundResponse
     */
    private $responseNetworkNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseNetworkNotFoundResponse $responseNetworkNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No network was found matching any of the criteria provided in the arguments');
        $this->responseNetworkNotFoundResponse = $responseNetworkNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseNetworkNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseNetworkNotFoundResponse
    {
        return $this->responseNetworkNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
