<?php

namespace ErvClient\Type;

class ProductsOfferResp
{
    /**
     * @var null | \ErvClient\Type\RespError
     */
    private ?\ErvClient\Type\RespError $error = null;

    /**
     * @var null | array<int<0,max>, \ErvClient\Type\ProductOffer>
     */
    private ?array $products = null;

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
     * @return null | array<int<0,max>, \ErvClient\Type\ProductOffer>
     */
    public function getProducts() : ?array
    {
        return $this->products;
    }

    /**
     * @param null | array<int<0,max>, \ErvClient\Type\ProductOffer> $products
     * @return static
     */
    public function withProducts(?array $products) : static
    {
        $new = clone $this;
        $new->products = $products;

        return $new;
    }
}

