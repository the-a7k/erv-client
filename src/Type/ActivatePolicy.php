<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ActivatePolicy implements RequestInterface
{
    /**
     * @var string
     */
    private string $uniqueId;

    /**
     * @var int
     */
    private int $policyNumber;

    /**
     * @var string
     */
    private string $currency;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param int $policyNumber
     * @param string $currency
     */
    public function __construct(string $uniqueId, int $policyNumber, string $currency)
    {
        $this->uniqueId = $uniqueId;
        $this->policyNumber = $policyNumber;
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
     * @return int
     */
    public function getPolicyNumber() : int
    {
        return $this->policyNumber;
    }

    /**
     * @param int $policyNumber
     * @return static
     */
    public function withPolicyNumber(int $policyNumber) : static
    {
        $new = clone $this;
        $new->policyNumber = $policyNumber;

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

