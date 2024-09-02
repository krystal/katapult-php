<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class PostAddressListEntriesBulkNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseAddressListNotFoundResponse
     */
    private $responseAddressListNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseAddressListNotFoundResponse $responseAddressListNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No address list was found matching any of the criteria provided in the arguments.');
        $this->responseAddressListNotFoundResponse = $responseAddressListNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseAddressListNotFoundResponse(): \KatapultAPI\Core\Model\ResponseAddressListNotFoundResponse
    {
        return $this->responseAddressListNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
