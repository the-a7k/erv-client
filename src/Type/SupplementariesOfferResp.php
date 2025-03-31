<?php

namespace ErvClient\Type;

class SupplementariesOfferResp
{
    /**
     * @var null | \ErvClient\Type\RespError
     */
    private ?\ErvClient\Type\RespError $error = null;

    /**
     * @var null | array<int<0,max>, \ErvClient\Type\SupplementaryTariffOffer>
     */
    private ?array $supplementaries = null;

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
     * @return null | array<int<0,max>, \ErvClient\Type\SupplementaryTariffOffer>
     */
    public function getSupplementaries() : ?array
    {
        return $this->supplementaries;
    }

    /**
     * @param null | array<int<0,max>, \ErvClient\Type\SupplementaryTariffOffer> $supplementaries
     * @return static
     */
    public function withSupplementaries(?array $supplementaries) : static
    {
        $new = clone $this;
        $new->supplementaries = $supplementaries;

        return $new;
    }
}

