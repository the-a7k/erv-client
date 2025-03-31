<?php

namespace ErvClient\Type;

class SupplementaryTariffOffer
{
    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | string
     */
    private ?string $regionCode = null;

    /**
     * @var null | string
     */
    private ?string $tariffCode = null;

    /**
     * @var null | string
     */
    private ?string $tariffGroupCode = null;

    /**
     * @var null | string
     */
    private ?string $tariffGroupName = null;

    /**
     * @var null | string
     */
    private ?string $tariffGroupDescription = null;

    /**
     * @var null | string
     */
    private ?string $type = null;

    /**
     * @var int
     */
    private int $minAge;

    /**
     * @var int
     */
    private int $maxAge;

    /**
     * @var int
     */
    private int $childAge;

    /**
     * @var int
     */
    private int $minDays;

    /**
     * @var int
     */
    private int $maxDays;

    /**
     * @var int
     */
    private int $cancellationCoverage;

    /**
     * @var float
     */
    private float $premium;

    /**
     * @var null | string
     */
    private ?string $calcType = null;

    /**
     * @var bool
     */
    private bool $countable;

    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * @var null | string
     */
    private ?string $addType = null;

    /**
     * @var null | string
     */
    private ?string $selectionRule = null;

    /**
     * @var null | string
     */
    private ?string $variantType = null;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRegionCode() : ?string
    {
        return $this->regionCode;
    }

    /**
     * @param null | string $regionCode
     * @return static
     */
    public function withRegionCode(?string $regionCode) : static
    {
        $new = clone $this;
        $new->regionCode = $regionCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffCode() : ?string
    {
        return $this->tariffCode;
    }

    /**
     * @param null | string $tariffCode
     * @return static
     */
    public function withTariffCode(?string $tariffCode) : static
    {
        $new = clone $this;
        $new->tariffCode = $tariffCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffGroupCode() : ?string
    {
        return $this->tariffGroupCode;
    }

    /**
     * @param null | string $tariffGroupCode
     * @return static
     */
    public function withTariffGroupCode(?string $tariffGroupCode) : static
    {
        $new = clone $this;
        $new->tariffGroupCode = $tariffGroupCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffGroupName() : ?string
    {
        return $this->tariffGroupName;
    }

    /**
     * @param null | string $tariffGroupName
     * @return static
     */
    public function withTariffGroupName(?string $tariffGroupName) : static
    {
        $new = clone $this;
        $new->tariffGroupName = $tariffGroupName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffGroupDescription() : ?string
    {
        return $this->tariffGroupDescription;
    }

    /**
     * @param null | string $tariffGroupDescription
     * @return static
     */
    public function withTariffGroupDescription(?string $tariffGroupDescription) : static
    {
        $new = clone $this;
        $new->tariffGroupDescription = $tariffGroupDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param null | string $type
     * @return static
     */
    public function withType(?string $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinAge() : int
    {
        return $this->minAge;
    }

    /**
     * @param int $minAge
     * @return static
     */
    public function withMinAge(int $minAge) : static
    {
        $new = clone $this;
        $new->minAge = $minAge;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxAge() : int
    {
        return $this->maxAge;
    }

    /**
     * @param int $maxAge
     * @return static
     */
    public function withMaxAge(int $maxAge) : static
    {
        $new = clone $this;
        $new->maxAge = $maxAge;

        return $new;
    }

    /**
     * @return int
     */
    public function getChildAge() : int
    {
        return $this->childAge;
    }

    /**
     * @param int $childAge
     * @return static
     */
    public function withChildAge(int $childAge) : static
    {
        $new = clone $this;
        $new->childAge = $childAge;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinDays() : int
    {
        return $this->minDays;
    }

    /**
     * @param int $minDays
     * @return static
     */
    public function withMinDays(int $minDays) : static
    {
        $new = clone $this;
        $new->minDays = $minDays;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxDays() : int
    {
        return $this->maxDays;
    }

    /**
     * @param int $maxDays
     * @return static
     */
    public function withMaxDays(int $maxDays) : static
    {
        $new = clone $this;
        $new->maxDays = $maxDays;

        return $new;
    }

    /**
     * @return int
     */
    public function getCancellationCoverage() : int
    {
        return $this->cancellationCoverage;
    }

    /**
     * @param int $cancellationCoverage
     * @return static
     */
    public function withCancellationCoverage(int $cancellationCoverage) : static
    {
        $new = clone $this;
        $new->cancellationCoverage = $cancellationCoverage;

        return $new;
    }

    /**
     * @return float
     */
    public function getPremium() : float
    {
        return $this->premium;
    }

    /**
     * @param float $premium
     * @return static
     */
    public function withPremium(float $premium) : static
    {
        $new = clone $this;
        $new->premium = $premium;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCalcType() : ?string
    {
        return $this->calcType;
    }

    /**
     * @param null | string $calcType
     * @return static
     */
    public function withCalcType(?string $calcType) : static
    {
        $new = clone $this;
        $new->calcType = $calcType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCountable() : bool
    {
        return $this->countable;
    }

    /**
     * @param bool $countable
     * @return static
     */
    public function withCountable(bool $countable) : static
    {
        $new = clone $this;
        $new->countable = $countable;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @param null | string $description
     * @return static
     */
    public function withDescription(?string $description) : static
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddType() : ?string
    {
        return $this->addType;
    }

    /**
     * @param null | string $addType
     * @return static
     */
    public function withAddType(?string $addType) : static
    {
        $new = clone $this;
        $new->addType = $addType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSelectionRule() : ?string
    {
        return $this->selectionRule;
    }

    /**
     * @param null | string $selectionRule
     * @return static
     */
    public function withSelectionRule(?string $selectionRule) : static
    {
        $new = clone $this;
        $new->selectionRule = $selectionRule;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVariantType() : ?string
    {
        return $this->variantType;
    }

    /**
     * @param null | string $variantType
     * @return static
     */
    public function withVariantType(?string $variantType) : static
    {
        $new = clone $this;
        $new->variantType = $variantType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }

    /**
     * @param null | string $currency
     * @return static
     */
    public function withCurrency(?string $currency) : static
    {
        $new = clone $this;
        $new->currency = $currency;

        return $new;
    }
}

