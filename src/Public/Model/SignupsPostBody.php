<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace KatapultAPI\Public\Model;

class SignupsPostBody extends \ArrayObject
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
     * The e-mail address that should receive the welcome e-mail.
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * The code for the coupon that will be applied to the first new organization created by the user.
     *
     * @var string
     */
    protected $coupon;
    /**
     * All 'campaign[]' params are mutually exclusive, only one can be provided.
     *
     * @var SignupCampaignArguments
     */
    protected $campaign;

    /**
     * The e-mail address that should receive the welcome e-mail.
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * The e-mail address that should receive the welcome e-mail.
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * The code for the coupon that will be applied to the first new organization created by the user.
     */
    public function getCoupon(): string
    {
        return $this->coupon;
    }

    /**
     * The code for the coupon that will be applied to the first new organization created by the user.
     */
    public function setCoupon(string $coupon): self
    {
        $this->initialized['coupon'] = true;
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * All 'campaign[]' params are mutually exclusive, only one can be provided.
     */
    public function getCampaign(): SignupCampaignArguments
    {
        return $this->campaign;
    }

    /**
     * All 'campaign[]' params are mutually exclusive, only one can be provided.
     */
    public function setCampaign(SignupCampaignArguments $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;

        return $this;
    }
}
