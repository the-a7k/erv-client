<?php

namespace ErvClient\Type;

class SuitableTariff
{
    /**
     * @var null | string
     */
    private ?string $code = null;

    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * @var null | string
     */
    private ?string $regionCode = null;

    /**
     * @var null | string
     */
    private ?string $tariffSubject = null;

    /**
     * @var null | string
     */
    private ?string $calcType = null;

    /**
     * @var null | float
     */
    private ?float $price = null;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @var int
     */
    private int $childAge;

    /**
     * @var int
     */
    private int $maxAdult;

    /**
     * @var int
     */
    private int $maxAge;

    /**
     * @var int
     */
    private int $maxChildren;

    /**
     * @var int
     */
    private int $maxDays;

    /**
     * @var int
     */
    private int $maxPersons;

    /**
     * @var int
     */
    private int $minAdult;

    /**
     * @var int
     */
    private int $minAge;

    /**
     * @var int
     */
    private int $minChildren;

    /**
     * @var int
     */
    private int $minDays;

    /**
     * @return null | string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param null | string $code
     * @return static
     */
    public function withCode(?string $code): static
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null | string $description
     * @return static
     */
    public function withDescription(?string $description): static
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    /**
     * @param null | string $regionCode
     * @return static
     */
    public function withRegionCode(?string $regionCode): static
    {
        $new = clone $this;
        $new->regionCode = $regionCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTariffSubject(): ?string
    {
        return $this->tariffSubject;
    }

    /**
     * @param null | string $tariffSubject
     * @return static
     */
    public function withTariffSubject(?string $tariffSubject): static
    {
        $new = clone $this;
        $new->tariffSubject = $tariffSubject;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCalcType(): ?string
    {
        return $this->calcType;
    }

    /**
     * @param null | string $calcType
     * @return static
     */
    public function withCalcType(?string $calcType): static
    {
        $new = clone $this;
        $new->calcType = $calcType;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param null | float $price
     * @return static
     */
    public function withPrice(?float $price): static
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param null | string $currency
     * @return static
     */
    public function withCurrency(?string $currency): static
    {
        $new = clone $this;
        $new->currency = $currency;

        return $new;
    }

    /**
     * @return int
     */
    public function getChildAge(): int
    {
        return $this->childAge;
    }

    /**
     * @param int $childAge
     * @return static
     */
    public function withChildAge(int $childAge): static
    {
        $new = clone $this;
        $new->childAge = $childAge;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxAdult(): int
    {
        return $this->maxAdult;
    }

    /**
     * @param int $maxAdult
     * @return static
     */
    public function withMaxAdult(int $maxAdult): static
    {
        $new = clone $this;
        $new->maxAdult = $maxAdult;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxAge(): int
    {
        return $this->maxAge;
    }

    /**
     * @param int $maxAge
     * @return static
     */
    public function withMaxAge(int $maxAge): static
    {
        $new = clone $this;
        $new->maxAge = $maxAge;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxChildren(): int
    {
        return $this->maxChildren;
    }

    /**
     * @param int $maxChildren
     * @return static
     */
    public function withMaxChildren(int $maxChildren): static
    {
        $new = clone $this;
        $new->maxChildren = $maxChildren;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxDays(): int
    {
        return $this->maxDays;
    }

    /**
     * @param int $maxDays
     * @return static
     */
    public function withMaxDays(int $maxDays): static
    {
        $new = clone $this;
        $new->maxDays = $maxDays;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxPersons(): int
    {
        return $this->maxPersons;
    }

    /**
     * @param int $maxPersons
     * @return static
     */
    public function withMaxPersons(int $maxPersons): static
    {
        $new = clone $this;
        $new->maxPersons = $maxPersons;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinAdult(): int
    {
        return $this->minAdult;
    }

    /**
     * @param int $minAdult
     * @return static
     */
    public function withMinAdult(int $minAdult): static
    {
        $new = clone $this;
        $new->minAdult = $minAdult;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinAge(): int
    {
        return $this->minAge;
    }

    /**
     * @param int $minAge
     * @return static
     */
    public function withMinAge(int $minAge): static
    {
        $new = clone $this;
        $new->minAge = $minAge;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinChildren(): int
    {
        return $this->minChildren;
    }

    /**
     * @param int $minChildren
     * @return static
     */
    public function withMinChildren(int $minChildren): static
    {
        $new = clone $this;
        $new->minChildren = $minChildren;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinDays(): int
    {
        return $this->minDays;
    }

    /**
     * @param int $minDays
     * @return static
     */
    public function withMinDays(int $minDays): static
    {
        $new = clone $this;
        $new->minDays = $minDays;

        return $new;
    }
}

