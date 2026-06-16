<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CalculatePolicyPremium implements RequestInterface
{
    /**
     * @var string
     */
    private string $uniqueId;

    /**
     * @var \ErvClient\Type\PolicyCalculatePremiumParms
     */
    private \ErvClient\Type\PolicyCalculatePremiumParms $policyParms;

    /**
     * @var string
     */
    private string $currency;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param \ErvClient\Type\PolicyCalculatePremiumParms $policyParms
     * @param string $currency
     */
    public function __construct(string $uniqueId, \ErvClient\Type\PolicyCalculatePremiumParms $policyParms, string $currency)
    {
        $this->uniqueId = $uniqueId;
        $this->policyParms = $policyParms;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return static
     */
    public function withUniqueId(string $uniqueId): static
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \ErvClient\Type\PolicyCalculatePremiumParms
     */
    public function getPolicyParms(): \ErvClient\Type\PolicyCalculatePremiumParms
    {
        return $this->policyParms;
    }

    /**
     * @param \ErvClient\Type\PolicyCalculatePremiumParms $policyParms
     * @return static
     */
    public function withPolicyParms(\ErvClient\Type\PolicyCalculatePremiumParms $policyParms): static
    {
        $new = clone $this;
        $new->policyParms = $policyParms;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return static
     */
    public function withCurrency(string $currency): static
    {
        $new = clone $this;
        $new->currency = $currency;

        return $new;
    }
}

