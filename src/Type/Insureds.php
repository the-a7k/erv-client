<?php

namespace ErvClient\Type;

class Insureds
{
    /**
     * @var non-empty-array<int<0,max>, \ErvClient\Type\InsuredPersonParms>
     */
    private array $insured;

    /**
     * @return non-empty-array<int<0,max>, \ErvClient\Type\InsuredPersonParms>
     */
    public function getInsured() : array
    {
        return $this->insured;
    }

    /**
     * @param non-empty-array<int<0,max>, \ErvClient\Type\InsuredPersonParms> $insured
     * @return static
     */
    public function withInsured(array $insured) : static
    {
        $new = clone $this;
        $new->insured = $insured;

        return $new;
    }
}

