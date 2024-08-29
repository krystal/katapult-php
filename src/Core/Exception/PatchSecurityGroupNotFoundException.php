<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class PatchSecurityGroupNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseSecurityGroupNotFoundResponse
     */
    private $responseSecurityGroupNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseSecurityGroupNotFoundResponse $responseSecurityGroupNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No security group was found matching any of the criteria provided in the arguments');
        $this->responseSecurityGroupNotFoundResponse = $responseSecurityGroupNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseSecurityGroupNotFoundResponse(): \KatapultAPI\Core\Model\ResponseSecurityGroupNotFoundResponse
    {
        return $this->responseSecurityGroupNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
