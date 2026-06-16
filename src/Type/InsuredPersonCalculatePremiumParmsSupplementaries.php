<?php

namespace ErvClient\Type;

class InsuredPersonCalculatePremiumParmsSupplementaries
{
    /**
     * @var non-empty-array<int<0,max>, string>
     */
    private array $supplementary;

    /**
     * @return non-empty-array<int<0,max>, string>
     */
    public function getSupplementary(): array
    {
        return $this->supplementary;
    }

    /**
     * @param non-empty-array<int<0,max>, string> $supplementary
     * @return static
     */
    public function withSupplementary(array $supplementary): static
    {
        $new = clone $this;
        $new->supplementary = $supplementary;

        return $new;
    }
}

