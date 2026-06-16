<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSuitableProductsOfferResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\SuitableProductsOfferResp
     */
    private ?\ErvClient\Type\SuitableProductsOfferResp $return = null;

    /**
     * @return null | \ErvClient\Type\SuitableProductsOfferResp
     */
    public function getReturn(): ?\ErvClient\Type\SuitableProductsOfferResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\SuitableProductsOfferResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\SuitableProductsOfferResp $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

