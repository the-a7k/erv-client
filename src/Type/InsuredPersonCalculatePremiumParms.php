<?php

namespace ErvClient\Type;

class InsuredPersonCalculatePremiumParms
{
    /**
     * @var float
     */
    private float $cancellationAmount;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @var string
     */
    private string $pin;

    /**
     * @var null | \ErvClient\Type\InsuredPersonCalculatePremiumParmsSupplementaries
     */
    private ?\ErvClient\Type\InsuredPersonCalculatePremiumParmsSupplementaries $supplementaries = null;

    /**
     * @var string
     */
    private string $tariff;

    /**
     * @return float
     */
    public function getCancellationAmount(): float
    {
        return $this->cancellationAmount;
    }

    /**
     * @param float $cancellationAmount
     * @return static
     */
    public function withCancellationAmount(float $cancellationAmount): static
    {
        $new = clone $this;
        $new->cancellationAmount = $cancellationAmount;

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
     * @return string
     */
    public function getPin(): string
    {
        return $this->pin;
    }

    /**
     * @param string $pin
     * @return static
     */
    public function withPin(string $pin): static
    {
        $new = clone $this;
        $new->pin = $pin;

        return $new;
    }

    /**
     * @return null | \ErvClient\Type\InsuredPersonCalculatePremiumParmsSupplementaries
     */
    public function getSupplementaries(): ?\ErvClient\Type\InsuredPersonCalculatePremiumParmsSupplementaries
    {
        return $this->supplementaries;
    }

    /**
     * @param null | \ErvClient\Type\InsuredPersonCalculatePremiumParmsSupplementaries $supplementaries
     * @return static
     */
    public function withSupplementaries(?\ErvClient\Type\InsuredPersonCalculatePremiumParmsSupplementaries $supplementaries): static
    {
        $new = clone $this;
        $new->supplementaries = $supplementaries;

        return $new;
    }

    /**
     * @return string
     */
    public function getTariff(): string
    {
        return $this->tariff;
    }

    /**
     * @param string $tariff
     * @return static
     */
    public function withTariff(string $tariff): static
    {
        $new = clone $this;
        $new->tariff = $tariff;

        return $new;
    }
}

