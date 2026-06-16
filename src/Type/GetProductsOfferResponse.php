<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetProductsOfferResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\ProductsOfferResp
     */
    private ?\ErvClient\Type\ProductsOfferResp $return = null;

    /**
     * @return null | \ErvClient\Type\ProductsOfferResp
     */
    public function getReturn(): ?\ErvClient\Type\ProductsOfferResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\ProductsOfferResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\ProductsOfferResp $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

