<?php

namespace ErvClient\Type;

class PolicyInfo
{
    /**
     * @var null | string
     */
    private ?string $agentCode = null;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @var float
     */
    private float $discount;

    /**
     * @var null | array<int<0,max>, \ErvClient\Type\InsuredPersonParms>
     */
    private ?array $insureds = null;

    /**
     * @var null | string
     */
    private ?string $issuedOn = null;

    /**
     * @var null | string
     */
    private ?string $lastDay = null;

    /**
     * @var null | \ErvClient\Type\PolicyHolderParms
     */
    private ?\ErvClient\Type\PolicyHolderParms $policyHolder = null;

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
     * @var int
     */
    private int $productCode;

    /**
     * @var null | string
     */
    private ?string $remark = null;

    /**
     * @var null | string
     */
    private ?string $seller = null;

    /**
     * @var null | string
     */
    private ?string $startDay = null;

    /**
     * @return null | string
     */
    public function getAgentCode(): ?string
    {
        return $this->agentCode;
    }

    /**
     * @param null | string $agentCode
     * @return static
     */
    public function withAgentCode(?string $agentCode): static
    {
        $new = clone $this;
        $new->agentCode = $agentCode;

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
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return static
     */
    public function withDiscount(float $discount): static
    {
        $new = clone $this;
        $new->discount = $discount;

        return $new;
    }

    /**
     * @return null | array<int<0,max>, \ErvClient\Type\InsuredPersonParms>
     */
    public function getInsureds(): ?array
    {
        return $this->insureds;
    }

    /**
     * @param null | array<int<0,max>, \ErvClient\Type\InsuredPersonParms> $insureds
     * @return static
     */
    public function withInsureds(?array $insureds): static
    {
        $new = clone $this;
        $new->insureds = $insureds;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIssuedOn(): ?string
    {
        return $this->issuedOn;
    }

    /**
     * @param null | string $issuedOn
     * @return static
     */
    public function withIssuedOn(?string $issuedOn): static
    {
        $new = clone $this;
        $new->issuedOn = $issuedOn;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLastDay(): ?string
    {
        return $this->lastDay;
    }

    /**
     * @param null | string $lastDay
     * @return static
     */
    public function withLastDay(?string $lastDay): static
    {
        $new = clone $this;
        $new->lastDay = $lastDay;

        return $new;
    }

    /**
     * @return null | \ErvClient\Type\PolicyHolderParms
     */
    public function getPolicyHolder(): ?\ErvClient\Type\PolicyHolderParms
    {
        return $this->policyHolder;
    }

    /**
     * @param null | \ErvClient\Type\PolicyHolderParms $policyHolder
     * @return static
     */
    public function withPolicyHolder(?\ErvClient\Type\PolicyHolderParms $policyHolder): static
    {
        $new = clone $this;
        $new->policyHolder = $policyHolder;

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

    /**
     * @return int
     */
    public function getProductCode(): int
    {
        return $this->productCode;
    }

    /**
     * @param int $productCode
     * @return static
     */
    public function withProductCode(int $productCode): static
    {
        $new = clone $this;
        $new->productCode = $productCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param null | string $remark
     * @return static
     */
    public function withRemark(?string $remark): static
    {
        $new = clone $this;
        $new->remark = $remark;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSeller(): ?string
    {
        return $this->seller;
    }

    /**
     * @param null | string $seller
     * @return static
     */
    public function withSeller(?string $seller): static
    {
        $new = clone $this;
        $new->seller = $seller;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStartDay(): ?string
    {
        return $this->startDay;
    }

    /**
     * @param null | string $startDay
     * @return static
     */
    public function withStartDay(?string $startDay): static
    {
        $new = clone $this;
        $new->startDay = $startDay;

        return $new;
    }
}

