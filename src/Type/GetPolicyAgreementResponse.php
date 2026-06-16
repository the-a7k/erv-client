<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPolicyAgreementResponse implements ResultInterface
{
    /**
     * @var null | \ErvClient\Type\DocumentDataResp
     */
    private ?\ErvClient\Type\DocumentDataResp $return = null;

    /**
     * @return null | \ErvClient\Type\DocumentDataResp
     */
    public function getReturn(): ?\ErvClient\Type\DocumentDataResp
    {
        return $this->return;
    }

    /**
     * @param null | \ErvClient\Type\DocumentDataResp $return
     * @return static
     */
    public function withReturn(?\ErvClient\Type\DocumentDataResp $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

