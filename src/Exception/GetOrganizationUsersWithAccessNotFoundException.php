<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Krystal\Katapult\KatapultAPI\Exception;

class GetOrganizationUsersWithAccessNotFoundException extends NotFoundException
{
    /**
     * @var \Krystal\Katapult\KatapultAPI\Model\ResponseOrganizationNotFoundResponse
     */
    private $responseOrganizationNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\Krystal\Katapult\KatapultAPI\Model\ResponseOrganizationNotFoundResponse $responseOrganizationNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No organization was found matching any of the criteria provided in the arguments');
        $this->responseOrganizationNotFoundResponse = $responseOrganizationNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseOrganizationNotFoundResponse(): \Krystal\Katapult\KatapultAPI\Model\ResponseOrganizationNotFoundResponse
    {
        return $this->responseOrganizationNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
