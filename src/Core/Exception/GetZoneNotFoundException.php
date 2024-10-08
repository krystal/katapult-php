<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetZoneNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseZoneNotFoundResponse
     */
    private $responseZoneNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseZoneNotFoundResponse $responseZoneNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No zone was found matching any of the criteria provided in the arguments');
        $this->responseZoneNotFoundResponse = $responseZoneNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseZoneNotFoundResponse(): \KatapultAPI\Core\Model\ResponseZoneNotFoundResponse
    {
        return $this->responseZoneNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
