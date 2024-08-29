<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Core\Model;

class SecurityGroupsRulesSecurityGroupRuleGetResponse200SecurityGroupRule extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $id;
    /**
     * @var GetSecurityGroupsRulesSecurityGroupRulePartSecurityGroup
     */
    protected $securityGroup;
    /**
     * @var string
     */
    protected $direction;
    /**
     * @var string
     */
    protected $protocol;
    /**
     * @var string
     */
    protected $action;
    /**
     * @var string|null
     */
    protected $ports;
    /**
     * @var list<string>
     */
    protected $targets;
    /**
     * @var string|null
     */
    protected $notes;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getSecurityGroup(): GetSecurityGroupsRulesSecurityGroupRulePartSecurityGroup
    {
        return $this->securityGroup;
    }

    public function setSecurityGroup(GetSecurityGroupsRulesSecurityGroupRulePartSecurityGroup $securityGroup): self
    {
        $this->initialized['securityGroup'] = true;
        $this->securityGroup = $securityGroup;

        return $this;
    }

    public function getDirection(): string
    {
        return $this->direction;
    }

    public function setDirection(string $direction): self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;

        return $this;
    }

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;

        return $this;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;

        return $this;
    }

    public function getPorts(): ?string
    {
        return $this->ports;
    }

    public function setPorts(?string $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports = $ports;

        return $this;
    }

    /**
     * @return list<string>
     */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /**
     * @param list<string> $targets
     */
    public function setTargets(array $targets): self
    {
        $this->initialized['targets'] = true;
        $this->targets = $targets;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }
}