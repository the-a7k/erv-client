<?php

namespace ErvClient\Type;

class PriceCurrency
{
    /**
     * @var float
     */
    private float $amount;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return static
     */
    public function withAmount(float $amount) : static
    {
        $new = clone $this;
        $new->amount = $amount;

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

