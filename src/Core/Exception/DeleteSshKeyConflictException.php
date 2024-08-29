<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class DeleteSshKeyConflictException extends ConflictException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseDeletionRestrictedResponse
     */
    private $responseDeletionRestrictedResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseDeletionRestrictedResponse $responseDeletionRestrictedResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Object cannot be deleted');
        $this->responseDeletionRestrictedResponse = $responseDeletionRestrictedResponse;
        $this->response = $response;
    }

    public function getResponseDeletionRestrictedResponse(): \KatapultAPI\Core\Model\ResponseDeletionRestrictedResponse
    {
        return $this->responseDeletionRestrictedResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}