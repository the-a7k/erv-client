<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProducts implements RequestInterface
{
    /**
     * @var string
     */
    private string $uniqueId;

    /**
     * @var null | string
     */
    private ?string $productGroups = null;

    /**
     * @var string
     */
    private string $startDate;

    /**
     * @var int
     */
    private int $insuredDays;

    /**
     * @var string
     */
    private string $region;

    /**
     * @var string
     */
    private string $insuredsCount;

    /**
     * @var string
     */
    private string $tariffTypes;

    /**
     * @var float
     */
    private float $cancellationAmount;

    /**
     * @var string
     */
    private string $currency;

    /**
     * @var string
     */
    private string $language;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param null | string $productGroups
     * @param string $startDate
     * @param int $insuredDays
     * @param string $region
     * @param string $insuredsCount
     * @param string $tariffTypes
     * @param float $cancellationAmount
     * @param string $currency
     * @param string $language
     */
    public function __construct(string $uniqueId, ?string $productGroups, string $startDate, int $insuredDays, string $region, string $insuredsCount, string $tariffTypes, float $cancellationAmount, string $currency, string $language)
    {
        $this->uniqueId = $uniqueId;
        $this->productGroups = $productGroups;
        $this->startDate = $startDate;
        $this->insuredDays = $insuredDays;
        $this->region = $region;
        $this->insuredsCount = $insuredsCount;
        $this->tariffTypes = $tariffTypes;
        $this->cancellationAmount = $cancellationAmount;
        $this->currency = $currency;
        $this->language = $language;
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
     * @return null | string
     */
    public function getProductGroups() : ?string
    {
        return $this->productGroups;
    }

    /**
     * @param null | string $productGroups
     * @return static
     */
    public function withProductGroups(?string $productGroups) : static
    {
        $new = clone $this;
        $new->productGroups = $productGroups;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartDate() : string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return static
     */
    public function withStartDate(string $startDate) : static
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getInsuredDays() : int
    {
        return $this->insuredDays;
    }

    /**
     * @param int $insuredDays
     * @return static
     */
    public function withInsuredDays(int $insuredDays) : static
    {
        $new = clone $this;
        $new->insuredDays = $insuredDays;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegion() : string
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return static
     */
    public function withRegion(string $region) : static
    {
        $new = clone $this;
        $new->region = $region;

        return $new;
    }

    /**
     * @return string
     */
    public function getInsuredsCount() : string
    {
        return $this->insuredsCount;
    }

    /**
     * @param string $insuredsCount
     * @return static
     */
    public function withInsuredsCount(string $insuredsCount) : static
    {
        $new = clone $this;
        $new->insuredsCount = $insuredsCount;

        return $new;
    }

    /**
     * @return string
     */
    public function getTariffTypes() : string
    {
        return $this->tariffTypes;
    }

    /**
     * @param string $tariffTypes
     * @return static
     */
    public function withTariffTypes(string $tariffTypes) : static
    {
        $new = clone $this;
        $new->tariffTypes = $tariffTypes;

        return $new;
    }

    /**
     * @return float
     */
    public function getCancellationAmount() : float
    {
        return $this->cancellationAmount;
    }

    /**
     * @param float $cancellationAmount
     * @return static
     */
    public function withCancellationAmount(float $cancellationAmount) : static
    {
        $new = clone $this;
        $new->cancellationAmount = $cancellationAmount;

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

    /**
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return static
     */
    public function withLanguage(string $language) : static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}

