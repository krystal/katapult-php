<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class PatchAddressListEntryNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseAddressListEntryNotFoundResponse
     */
    private $responseAddressListEntryNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseAddressListEntryNotFoundResponse $responseAddressListEntryNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No address list entry was found matching any of the criteria provided in the arguments.');
        $this->responseAddressListEntryNotFoundResponse = $responseAddressListEntryNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseAddressListEntryNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseAddressListEntryNotFoundResponse
    {
        return $this->responseAddressListEntryNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
