<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class PostDnsZoneVerifyUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseDNSZoneNotVerifiedResponse
     */
    private $responseDNSZoneNotVerifiedResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseDNSZoneNotVerifiedResponse $responseDNSZoneNotVerifiedResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('The DNS zone could not be verified, check the nameservers are set correctly');
        $this->responseDNSZoneNotVerifiedResponse = $responseDNSZoneNotVerifiedResponse;
        $this->response = $response;
    }

    public function getResponseDNSZoneNotVerifiedResponse(): \KatapultAPI\Core\Model\ResponseDNSZoneNotVerifiedResponse
    {
        return $this->responseDNSZoneNotVerifiedResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}