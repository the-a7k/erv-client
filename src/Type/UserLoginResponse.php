<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UserLoginResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\LoginResp
     */
    private ?\ErvClient\Type\LoginResp $return = null;

    /**
     * @return null | \ErvClient\Type\LoginResp
     */
    public function getReturn(): ?\ErvClient\Type\LoginResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\LoginResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\LoginResp $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

