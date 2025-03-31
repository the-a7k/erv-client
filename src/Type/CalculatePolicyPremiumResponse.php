<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CalculatePolicyPremiumResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\PolicyPremiumResp
     */
    private ?\ErvClient\Type\PolicyPremiumResp $return = null;

    /**
     * @return null | \ErvClient\Type\PolicyPremiumResp
     */
    public function getReturn() : ?\ErvClient\Type\PolicyPremiumResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\PolicyPremiumResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\PolicyPremiumResp $return) : static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

