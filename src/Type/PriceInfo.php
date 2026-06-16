<?php

namespace ErvClient\Type;

class PriceInfo
{
    /**
     * @var null | array<int<0,max>, \ErvClient\Type\PriceCurrency>
     */
    private ?array $price = null;

    /**
     * @return null | array<int<0,max>, \ErvClient\Type\PriceCurrency>
     */
    public function getPrice(): ?array
    {
        return $this->price;
    }

    /**
     * @param null | array<int<0,max>, \ErvClient\Type\PriceCurrency> $price
     * @return static
     */
    public function withPrice(?array $price): static
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }
}

