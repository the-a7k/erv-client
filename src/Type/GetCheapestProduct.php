<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCheapestProduct implements RequestInterface
{
    /**
     * @var string
     */
    private string $uniqueId;

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
     * @param int $insuredDays
     * @param string $region
     * @param int $insuredsCount
     * @param string $tariffType
     * @param string $currency
     * @param string $language
     */
    public function __construct(string $uniqueId, int $insuredDays, string $region, int $insuredsCount, string $tariffType, string $currency, string $language)
    {
        $this->uniqueId = $uniqueId;
        $this->insuredDays = $insuredDays;
        $this->region = $region;
        $this->insuredsCount = $insuredsCount;
        $this->tariffType = $tariffType;
        $this->currency = $currency;
        $this->language = $language;
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
     * @return int
     */
    public function getInsuredDays(): int
    {
        return $this->insuredDays;
    }

    /**
     * @param int $insuredDays
     * @return static
     */
    public function withInsuredDays(int $insuredDays): static
    {
        $new = clone $this;
        $new->insuredDays = $insuredDays;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return static
     */
    public function withRegion(string $region): static
    {
        $new = clone $this;
        $new->region = $region;

        return $new;
    }

    /**
     * @return int
     */
    public function getInsuredsCount(): int
    {
        return $this->insuredsCount;
    }

    /**
     * @param int $insuredsCount
     * @return static
     */
    public function withInsuredsCount(int $insuredsCount): static
    {
        $new = clone $this;
        $new->insuredsCount = $insuredsCount;

        return $new;
    }

    /**
     * @return string
     */
    public function getTariffType(): string
    {
        return $this->tariffType;
    }

    /**
     * @param string $tariffType
     * @return static
     */
    public function withTariffType(string $tariffType): static
    {
        $new = clone $this;
        $new->tariffType = $tariffType;

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

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return static
     */
    public function withLanguage(string $language): static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}

