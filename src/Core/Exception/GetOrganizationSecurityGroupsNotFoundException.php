<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetOrganizationSecurityGroupsNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseOrganizationNotFoundResponse
     */
    private $responseOrganizationNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseOrganizationNotFoundResponse $responseOrganizationNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No organization was found matching any of the criteria provided in the arguments');
        $this->responseOrganizationNotFoundResponse = $responseOrganizationNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseOrganizationNotFoundResponse(): \KatapultAPI\Core\Model\ResponseOrganizationNotFoundResponse
    {
        return $this->responseOrganizationNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
