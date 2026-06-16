<?php

namespace ErvClient\Type;

class PolicyResp
{
    /**
     * @var null | \ErvClient\Type\RespError
     */
    private ?\ErvClient\Type\RespError $error = null;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @var int
     */
    private int $policyNumber;

    /**
     * @var float
     */
    private float $policyRecId;

    /**
     * @var null | string
     */
    private ?string $policyStatus = null;

    /**
     * @var float
     */
    private float $price;

    /**
     * @return null | \ErvClient\Type\RespError
     */
    public function getError(): ?\ErvClient\Type\RespError
    {
        return $this->error;
    }

    /**
     * @param null | \ErvClient\Type\RespError $error
     * @return static
     */
    public function withError(?\ErvClient\Type\RespError $error): static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param null | string $currency
     * @return static
     */
    public function withCurrency(?string $currency): static
    {
        $new = clone $this;
        $new->currency = $currency;

        return $new;
    }

    /**
     * @return int
     */
    public function getPolicyNumber(): int
    {
        return $this->policyNumber;
    }

    /**
     * @param int $policyNumber
     * @return static
     */
    public function withPolicyNumber(int $policyNumber): static
    {
        $new = clone $this;
        $new->policyNumber = $policyNumber;

        return $new;
    }

    /**
     * @return float
     */
    public function getPolicyRecId(): float
    {
        return $this->policyRecId;
    }

    /**
     * @param float $policyRecId
     * @return static
     */
    public function withPolicyRecId(float $policyRecId): static
    {
        $new = clone $this;
        $new->policyRecId = $policyRecId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPolicyStatus(): ?string
    {
        return $this->policyStatus;
    }

    /**
     * @param null | string $policyStatus
     * @return static
     */
    public function withPolicyStatus(?string $policyStatus): static
    {
        $new = clone $this;
        $new->policyStatus = $policyStatus;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return static
     */
    public function withPrice(float $price): static
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }
}

