<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreatePolicyResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\PolicyResp
     */
    private ?\ErvClient\Type\PolicyResp $return = null;

    /**
     * @return null | \ErvClient\Type\PolicyResp
     */
    public function getReturn() : ?\ErvClient\Type\PolicyResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\PolicyResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\PolicyResp $return) : static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

