<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSupplementariesOfferResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\SupplementariesOfferResp
     */
    private ?\ErvClient\Type\SupplementariesOfferResp $return = null;

    /**
     * @return null | \ErvClient\Type\SupplementariesOfferResp
     */
    public function getReturn() : ?\ErvClient\Type\SupplementariesOfferResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\SupplementariesOfferResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\SupplementariesOfferResp $return) : static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

