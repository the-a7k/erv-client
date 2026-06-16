<?php

namespace ErvClient\Type;

class SuitableProductsOfferResp
{
    /**
     * @var null | \ErvClient\Type\RespError
     */
    private ?\ErvClient\Type\RespError $error = null;

    /**
     * @var null | array<int<0,max>, \ErvClient\Type\SuitableProductOffer>
     */
    private ?array $product = null;

    /**
     * @return null | \ErvClient\Type\RespError
     */
    public function getError(): ?\ErvClient\Type\RespError
    {
        return $this->error;
    }

    /**
     * @param null | \ErvClient\Type\RespError $error
     * @return static
     */
    public function withError(?\ErvClient\Type\RespError $error): static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }

    /**
     * @return null | array<int<0,max>, \ErvClient\Type\SuitableProductOffer>
     */
    public function getProduct(): ?array
    {
        return $this->product;
    }

    /**
     * @param null | array<int<0,max>, \ErvClient\Type\SuitableProductOffer> $product
     * @return static
     */
    public function withProduct(?array $product): static
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }
}

