<?php

namespace ErvClient\Type;

class PolicyInfoResp
{
    /**
     * @var null | \ErvClient\Type\RespError
     */
    private ?\ErvClient\Type\RespError $error = null;

    /**
     * @var null | \ErvClient\Type\PolicyInfo
     */
    private ?\ErvClient\Type\PolicyInfo $policyInfo = null;

    /**
     * @return null | \ErvClient\Type\RespError
     */
    public function getError() : ?\ErvClient\Type\RespError
    {
        return $this->error;
    }

    /**
     * @param null | \ErvClient\Type\RespError $error
     * @return static
     */
    public function withError(?\ErvClient\Type\RespError $error) : static
    {
        $new = clone $this;
        $new->error = $error;

        return $new;
    }

    /**
     * @return null | \ErvClient\Type\PolicyInfo
     */
    public function getPolicyInfo() : ?\ErvClient\Type\PolicyInfo
    {
        return $this->policyInfo;
    }

    /**
     * @param null | \ErvClient\Type\PolicyInfo $policyInfo
     * @return static
     */
    public function withPolicyInfo(?\ErvClient\Type\PolicyInfo $policyInfo) : static
    {
        $new = clone $this;
        $new->policyInfo = $policyInfo;

        return $new;
    }
}

