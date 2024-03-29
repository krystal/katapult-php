<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class GetCurrencyNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseCurrencyNotFoundResponse
     */
    private $responseCurrencyNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseCurrencyNotFoundResponse $responseCurrencyNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No currency was found matching any of the criteria provided in the arguments');
        $this->responseCurrencyNotFoundResponse = $responseCurrencyNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseCurrencyNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseCurrencyNotFoundResponse
    {
        return $this->responseCurrencyNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
