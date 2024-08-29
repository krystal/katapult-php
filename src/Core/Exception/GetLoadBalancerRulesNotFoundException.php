<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Exception;

class GetLoadBalancerRulesNotFoundException extends NotFoundException
{
    /**
     * @var \KatapultAPI\Core\Model\ResponseLoadBalancerNotFoundResponse
     */
    private $responseLoadBalancerNotFoundResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\KatapultAPI\Core\Model\ResponseLoadBalancerNotFoundResponse $responseLoadBalancerNotFoundResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('No load balancer was found matching any of the criteria provided in the arguments');
        $this->responseLoadBalancerNotFoundResponse = $responseLoadBalancerNotFoundResponse;
        $this->response = $response;
    }

    public function getResponseLoadBalancerNotFoundResponse(): \KatapultAPI\Core\Model\ResponseLoadBalancerNotFoundResponse
    {
        return $this->responseLoadBalancerNotFoundResponse;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
