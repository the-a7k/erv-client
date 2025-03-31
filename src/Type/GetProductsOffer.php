<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductsOffer implements RequestInterface
{
    /**
     * @var string
     */
    private string $uniqueId;

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
     * @var int
     */
    private int $insuredsCount;

    /**
     * @var string
     */
    private string $tariffType;

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
     * @param string $startDate
     * @param int $insuredDays
     * @param string $region
     * @param int $insuredsCount
     * @param string $tariffType
     * @param float $cancellationAmount
     * @param string $currency
     * @param string $language
     */
    public function __construct(string $uniqueId, string $startDate, int $insuredDays, string $region, int $insuredsCount, string $tariffType, float $cancellationAmount, string $currency, string $language)
    {
        $this->uniqueId = $uniqueId;
        $this->startDate = $startDate;
        $this->insuredDays = $insuredDays;
        $this->region = $region;
        $this->insuredsCount = $insuredsCount;
        $this->tariffType = $tariffType;
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
     * @return int
     */
    public function getInsuredsCount() : int
    {
        return $this->insuredsCount;
    }

    /**
     * @param int $insuredsCount
     * @return static
     */
    public function withInsuredsCount(int $insuredsCount) : static
    {
        $new = clone $this;
        $new->insuredsCount = $insuredsCount;

        return $new;
    }

    /**
     * @return string
     */
    public function getTariffType() : string
    {
        return $this->tariffType;
    }

    /**
     * @param string $tariffType
     * @return static
     */
    public function withTariffType(string $tariffType) : static
    {
        $new = clone $this;
        $new->tariffType = $tariffType;

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

