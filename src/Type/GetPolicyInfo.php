<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPolicyInfo implements RequestInterface
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
     * Constructor
     *
     * @param string $uniqueId
     * @param int $policyNumber
     */
    public function __construct(string $uniqueId, int $policyNumber)
    {
        $this->uniqueId = $uniqueId;
        $this->policyNumber = $policyNumber;
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
}

