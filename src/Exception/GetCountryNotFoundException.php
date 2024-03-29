<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class GetCountryNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseCountryNotFoundResponse
     */
    private $responseCountryNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseCountryNotFoundResponse $responseCountryNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No country was found matching any of the criteria provided in the arguments');
        $this->responseCountryNotFoundResponse = $responseCountryNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseCountryNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseCountryNotFoundResponse
    {
        return $this->responseCountryNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
