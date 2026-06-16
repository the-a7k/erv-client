<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendPolicyDraftResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\SendPolicyResp
     */
    private ?\ErvClient\Type\SendPolicyResp $return = null;

    /**
     * @return null | \ErvClient\Type\SendPolicyResp
     */
    public function getReturn(): ?\ErvClient\Type\SendPolicyResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\SendPolicyResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\SendPolicyResp $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

