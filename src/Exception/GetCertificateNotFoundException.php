<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class GetCertificateNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseCertificateNotFoundResponse
     */
    private $responseCertificateNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseCertificateNotFoundResponse $responseCertificateNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No certificate was found matching any of the criteria provided in the arguments');
        $this->responseCertificateNotFoundResponse = $responseCertificateNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseCertificateNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseCertificateNotFoundResponse
    {
        return $this->responseCertificateNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
