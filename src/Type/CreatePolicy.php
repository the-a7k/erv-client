<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreatePolicy implements RequestInterface
{
    /**
     * @var string
     */
    private string $uniqueId;

    /**
     * @var \ErvClient\Type\PolicyParms
     */
    private \ErvClient\Type\PolicyParms $policyParms;

    /**
     * @var bool
     */
    private bool $activate;

    /**
     * @var string
     */
    private string $currency;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param \ErvClient\Type\PolicyParms $policyParms
     * @param bool $activate
     * @param string $currency
     */
    public function __construct(string $uniqueId, \ErvClient\Type\PolicyParms $policyParms, bool $activate, string $currency)
    {
        $this->uniqueId = $uniqueId;
        $this->policyParms = $policyParms;
        $this->activate = $activate;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getUniqueId() : string
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return static
     */
    public function withUniqueId(string $uniqueId) : static
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \ErvClient\Type\PolicyParms
     */
    public function getPolicyParms() : \ErvClient\Type\PolicyParms
    {
        return $this->policyParms;
    }

    /**
     * @param \ErvClient\Type\PolicyParms $policyParms
     * @return static
     */
    public function withPolicyParms(\ErvClient\Type\PolicyParms $policyParms) : static
    {
        $new = clone $this;
        $new->policyParms = $policyParms;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActivate() : bool
    {
        return $this->activate;
    }

    /**
     * @param bool $activate
     * @return static
     */
    public function withActivate(bool $activate) : static
    {
        $new = clone $this;
        $new->activate = $activate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return static
     */
    public function withCurrency(string $currency) : static
    {
        $new = clone $this;
        $new->currency = $currency;

        return $new;
    }
}

