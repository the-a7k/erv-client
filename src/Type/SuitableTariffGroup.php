<?php

namespace ErvClient\Type;

class SuitableTariffGroup
{
    /**
     * @var bool
     */
    private bool $additional;

    /**
     * @var null | string
     */
    private ?string $groupCode = null;

    /**
     * @var null | string
     */
    private ?string $groupName = null;

    /**
     * @var null | string
     */
    private ?string $groupDescription = null;

    /**
     * @var null | string
     */
    private ?string $selection = null;

    /**
     * @var null | string
     */
    private ?string $variants = null;

    /**
     * @var null | string
     */
    private ?string $tariffSpec = null;

    /**
     * @var null | string
     */
    private ?string $tariffType = null;

    /**
     * @var null | array<int<0,max>, \ErvClient\Type\SuitableTariff>
     */
    private ?array $tariff = null;

    /**
     * @return bool
     */
    public function getAdditional(): bool
    {
        return $this->additional;
    }

    /**
     * @param bool $additional
     * @return static
     */
    public function withAdditional(bool $additional): static
    {
        $new = clone $this;
        $new->additional = $additional;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGroupCode(): ?string
    {
        return $this->groupCode;
    }

    /**
     * @param null | string $groupCode
     * @return static
     */
    public function withGroupCode(?string $groupCode): static
    {
        $new = clone $this;
        $new->groupCode = $groupCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * @param null | string $groupName
     * @return static
     */
    public function withGroupName(?string $groupName): static
    {
        $new = clone $this;
        $new->groupName = $groupName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGroupDescription(): ?string
    {
        return $this->groupDescription;
    }

    /**
     * @param null | string $groupDescription
     * @return static
     */
    public function withGroupDescription(?string $groupDescription): static
    {
        $new = clone $this;
        $new->groupDescription = $groupDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSelection(): ?string
    {
        return $this->selection;
    }

    /**
     * @param null | string $selection
     * @return static
     */
    public function withSelection(?string $selection): static
    {
        $new = clone $this;
        $new->selection = $selection;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVariants(): ?string
    {
        return $this->variants;
    }

    /**
     * @param null | string $variants
     * @return static
     */
    public function withVariants(?string $variants): static
    {
        $new = clone $this;
        $new->variants = $variants;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffSpec(): ?string
    {
        return $this->tariffSpec;
    }

    /**
     * @param null | string $tariffSpec
     * @return static
     */
    public function withTariffSpec(?string $tariffSpec): static
    {
        $new = clone $this;
        $new->tariffSpec = $tariffSpec;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffType(): ?string
    {
        return $this->tariffType;
    }

    /**
     * @param null | string $tariffType
     * @return static
     */
    public function withTariffType(?string $tariffType): static
    {
        $new = clone $this;
        $new->tariffType = $tariffType;

        return $new;
    }

    /**
     * @return null | array<int<0,max>, \ErvClient\Type\SuitableTariff>
     */
    public function getTariff(): ?array
    {
        return $this->tariff;
    }

    /**
     * @param null | array<int<0,max>, \ErvClient\Type\SuitableTariff> $tariff
     * @return static
     */
    public function withTariff(?array $tariff): static
    {
        $new = clone $this;
        $new->tariff = $tariff;

        return $new;
    }
}

