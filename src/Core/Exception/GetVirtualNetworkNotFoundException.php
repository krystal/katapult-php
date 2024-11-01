<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetVirtualNetworkNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseVirtualNetworkNotFoundResponse
     */
    private $responseVirtualNetworkNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseVirtualNetworkNotFoundResponse $responseVirtualNetworkNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No virtual network was found matching any of the criteria provided in the arguments');
        $this->responseVirtualNetworkNotFoundResponse = $responseVirtualNetworkNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseVirtualNetworkNotFoundResponse(): \KatapultAPI\Core\Model\ResponseVirtualNetworkNotFoundResponse
    {
        return $this->responseVirtualNetworkNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}