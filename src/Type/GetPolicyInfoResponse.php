<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPolicyInfoResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\PolicyInfoResp
     */
    private ?\ErvClient\Type\PolicyInfoResp $return = null;

    /**
     * @return null | \ErvClient\Type\PolicyInfoResp
     */
    public function getReturn() : ?\ErvClient\Type\PolicyInfoResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\PolicyInfoResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\PolicyInfoResp $return) : static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

