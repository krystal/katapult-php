<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class PostIpAddressUnallocateNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseIPAddressNotFoundResponse
     */
    private $responseIPAddressNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseIPAddressNotFoundResponse $responseIPAddressNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No IP addresses were found matching any of the criteria provided in the arguments');
        $this->responseIPAddressNotFoundResponse = $responseIPAddressNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseIPAddressNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseIPAddressNotFoundResponse
    {
        return $this->responseIPAddressNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
