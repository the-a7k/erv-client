<?php

namespace ErvClient\Type;

class PolicyPremiumResp
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
     * @var float
     */
    private float $price;

    /**
     * @var null | \ErvClient\Type\PriceInfo
     */
    private ?\ErvClient\Type\PriceInfo $prices = null;

    /**
     * @return null | \ErvClient\Type\RespError
     */
    public function getError() : ?\ErvClient\Type\RespError
    {
        return $this->error;
    }

    /**
     * @param null | \ErvClient\Type\RespError $error
     * @return static
     */
    public function withError(?\ErvClient\Type\RespError $error) : static
    {
        $new = clone $this;
        $new->error = $error;

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

    /**
     * @return float
     */
    public function getPrice() : float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return static
     */
    public function withPrice(float $price) : static
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }

    /**
     * @return null | \ErvClient\Type\PriceInfo
     */
    public function getPrices() : ?\ErvClient\Type\PriceInfo
    {
        return $this->prices;
    }

    /**
     * @param null | \ErvClient\Type\PriceInfo $prices
     * @return static
     */
    public function withPrices(?\ErvClient\Type\PriceInfo $prices) : static
    {
        $new = clone $this;
        $new->prices = $prices;

        return $new;
    }
}

