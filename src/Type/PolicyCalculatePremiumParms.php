<?php

namespace ErvClient\Type;

class PolicyCalculatePremiumParms
{
    /**
     * @var non-empty-array<int<0,max>, \ErvClient\Type\InsuredPersonCalculatePremiumParms>
     */
    private array $insureds;

    /**
     * @var null | string
     */
    private ?string $issuedOn = null;

    /**
     * @var string
     */
    private string $lastDay;

    /**
     * @var int
     */
    private int $productCode;

    /**
     * @var string
     */
    private string $regionCode;

    /**
     * @var string
     */
    private string $startDay;

    /**
     * @return non-empty-array<int<0,max>, \ErvClient\Type\InsuredPersonCalculatePremiumParms>
     */
    public function getInsureds() : array
    {
        return $this->insureds;
    }

    /**
     * @param non-empty-array<int<0,max>, \ErvClient\Type\InsuredPersonCalculatePremiumParms> $insureds
     * @return static
     */
    public function withInsureds(array $insureds) : static
    {
        $new = clone $this;
        $new->insureds = $insureds;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIssuedOn() : ?string
    {
        return $this->issuedOn;
    }

    /**
     * @param null | string $issuedOn
     * @return static
     */
    public function withIssuedOn(?string $issuedOn) : static
    {
        $new = clone $this;
        $new->issuedOn = $issuedOn;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastDay() : string
    {
        return $this->lastDay;
    }

    /**
     * @param string $lastDay
     * @return static
     */
    public function withLastDay(string $lastDay) : static
    {
        $new = clone $this;
        $new->lastDay = $lastDay;

        return $new;
    }

    /**
     * @return int
     */
    public function getProductCode() : int
    {
        return $this->productCode;
    }

    /**
     * @param int $productCode
     * @return static
     */
    public function withProductCode(int $productCode) : static
    {
        $new = clone $this;
        $new->productCode = $productCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegionCode() : string
    {
        return $this->regionCode;
    }

    /**
     * @param string $regionCode
     * @return static
     */
    public function withRegionCode(string $regionCode) : static
    {
        $new = clone $this;
        $new->regionCode = $regionCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartDay() : string
    {
        return $this->startDay;
    }

    /**
     * @param string $startDay
     * @return static
     */
    public function withStartDay(string $startDay) : static
    {
        $new = clone $this;
        $new->startDay = $startDay;

        return $new;
    }
}

