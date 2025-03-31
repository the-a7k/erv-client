<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetProductsResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\ProductsResp
     */
    private ?\ErvClient\Type\ProductsResp $return = null;

    /**
     * @return null | \ErvClient\Type\ProductsResp
     */
    public function getReturn() : ?\ErvClient\Type\ProductsResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\ProductsResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\ProductsResp $return) : static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

