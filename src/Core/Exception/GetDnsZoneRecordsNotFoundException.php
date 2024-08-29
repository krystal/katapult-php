<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetDnsZoneRecordsNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseDNSZoneNotFoundResponse
     */
    private $responseDNSZoneNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseDNSZoneNotFoundResponse $responseDNSZoneNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No DNS zone was found matching any of the criteria provided in the arguments');
        $this->responseDNSZoneNotFoundResponse = $responseDNSZoneNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseDNSZoneNotFoundResponse(): \KatapultAPI\Core\Model\ResponseDNSZoneNotFoundResponse
    {
        return $this->responseDNSZoneNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
