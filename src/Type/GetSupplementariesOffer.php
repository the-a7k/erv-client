<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetSupplementariesOffer implements RequestInterface
{
    /**
     * @var string
     */
    private string $uniqueId;

    /**
     * @var int
     */
    private int $productCode;

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
    private string $currency;

    /**
     * @var string
     */
    private string $language;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param int $productCode
     * @param string $startDate
     * @param int $insuredDays
     * @param string $currency
     * @param string $language
     */
    public function __construct(string $uniqueId, int $productCode, string $startDate, int $insuredDays, string $currency, string $language)
    {
        $this->uniqueId = $uniqueId;
        $this->productCode = $productCode;
        $this->startDate = $startDate;
        $this->insuredDays = $insuredDays;
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
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return static
     */
    public function withStartDate(string $startDate): static
    {
        $new = clone $this;
        $new->startDate = $startDate;

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

