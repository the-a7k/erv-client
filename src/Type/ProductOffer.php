<?php

namespace ErvClient\Type;

class ProductOffer
{
    /**
     * @var null | float
     */
    private ?float $basicPrice = null;

    /**
     * @var null | string
     */
    private ?string $calcType = null;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @var int
     */
    private int $product;

    /**
     * @var null | string
     */
    private ?string $productName = null;

    /**
     * @var null | string
     */
    private ?string $region = null;

    /**
     * @var null | string
     */
    private ?string $regionName = null;

    /**
     * @var null | string
     */
    private ?string $tariff = null;

    /**
     * @var null | string
     */
    private ?string $tariffDescription = null;

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
    private ?string $usageInfo = null;

    /**
     * @return null | float
     */
    public function getBasicPrice(): ?float
    {
        return $this->basicPrice;
    }

    /**
     * @param null | float $basicPrice
     * @return static
     */
    public function withBasicPrice(?float $basicPrice): static
    {
        $new = clone $this;
        $new->basicPrice = $basicPrice;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCalcType(): ?string
    {
        return $this->calcType;
    }

    /**
     * @param null | string $calcType
     * @return static
     */
    public function withCalcType(?string $calcType): static
    {
        $new = clone $this;
        $new->calcType = $calcType;

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
    public function getProduct(): int
    {
        return $this->product;
    }

    /**
     * @param int $product
     * @return static
     */
    public function withProduct(int $product): static
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param null | string $productName
     * @return static
     */
    public function withProductName(?string $productName): static
    {
        $new = clone $this;
        $new->productName = $productName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param null | string $region
     * @return static
     */
    public function withRegion(?string $region): static
    {
        $new = clone $this;
        $new->region = $region;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRegionName(): ?string
    {
        return $this->regionName;
    }

    /**
     * @param null | string $regionName
     * @return static
     */
    public function withRegionName(?string $regionName): static
    {
        $new = clone $this;
        $new->regionName = $regionName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariff(): ?string
    {
        return $this->tariff;
    }

    /**
     * @param null | string $tariff
     * @return static
     */
    public function withTariff(?string $tariff): static
    {
        $new = clone $this;
        $new->tariff = $tariff;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffDescription(): ?string
    {
        return $this->tariffDescription;
    }

    /**
     * @param null | string $tariffDescription
     * @return static
     */
    public function withTariffDescription(?string $tariffDescription): static
    {
        $new = clone $this;
        $new->tariffDescription = $tariffDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffGroupCode(): ?string
    {
        return $this->tariffGroupCode;
    }

    /**
     * @param null | string $tariffGroupCode
     * @return static
     */
    public function withTariffGroupCode(?string $tariffGroupCode): static
    {
        $new = clone $this;
        $new->tariffGroupCode = $tariffGroupCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffGroupName(): ?string
    {
        return $this->tariffGroupName;
    }

    /**
     * @param null | string $tariffGroupName
     * @return static
     */
    public function withTariffGroupName(?string $tariffGroupName): static
    {
        $new = clone $this;
        $new->tariffGroupName = $tariffGroupName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffGroupDescription(): ?string
    {
        return $this->tariffGroupDescription;
    }

    /**
     * @param null | string $tariffGroupDescription
     * @return static
     */
    public function withTariffGroupDescription(?string $tariffGroupDescription): static
    {
        $new = clone $this;
        $new->tariffGroupDescription = $tariffGroupDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUsageInfo(): ?string
    {
        return $this->usageInfo;
    }

    /**
     * @param null | string $usageInfo
     * @return static
     */
    public function withUsageInfo(?string $usageInfo): static
    {
        $new = clone $this;
        $new->usageInfo = $usageInfo;

        return $new;
    }
}

