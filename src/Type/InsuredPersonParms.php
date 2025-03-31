<?php

namespace ErvClient\Type;

class InsuredPersonParms
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
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | string
     */
    private ?string $pin = null;

    /**
     * @var null | string
     */
    private ?string $sex = null;

    /**
     * @var string
     */
    private string $surname;

    /**
     * @var string
     */
    private string $tariff;

    /**
     * @var null | \ErvClient\Type\Supplementaries
     */
    private ?\ErvClient\Type\Supplementaries $supplementaries = null;

    /**
     * @var null | string
     */
    private ?string $itemId = null;

    /**
     * @var null | string
     */
    private ?string $itemName = null;

    /**
     * @var null | string
     */
    private ?string $itemDescription = null;

    /**
     * @return float
     */
    public function getCancellationAmount() : float
    {
        return $this->cancellationAmount;
    }

    /**
     * @param float $cancellationAmount
     * @return static
     */
    public function withCancellationAmount(float $cancellationAmount) : static
    {
        $new = clone $this;
        $new->cancellationAmount = $cancellationAmount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }

    /**
     * @param null | string $currency
     * @return static
     */
    public function withCurrency(?string $currency) : static
    {
        $new = clone $this;
        $new->currency = $currency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPin() : ?string
    {
        return $this->pin;
    }

    /**
     * @param null | string $pin
     * @return static
     */
    public function withPin(?string $pin) : static
    {
        $new = clone $this;
        $new->pin = $pin;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSex() : ?string
    {
        return $this->sex;
    }

    /**
     * @param null | string $sex
     * @return static
     */
    public function withSex(?string $sex) : static
    {
        $new = clone $this;
        $new->sex = $sex;

        return $new;
    }

    /**
     * @return string
     */
    public function getSurname() : string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return static
     */
    public function withSurname(string $surname) : static
    {
        $new = clone $this;
        $new->surname = $surname;

        return $new;
    }

    /**
     * @return string
     */
    public function getTariff() : string
    {
        return $this->tariff;
    }

    /**
     * @param string $tariff
     * @return static
     */
    public function withTariff(string $tariff) : static
    {
        $new = clone $this;
        $new->tariff = $tariff;

        return $new;
    }

    /**
     * @return null | \ErvClient\Type\Supplementaries
     */
    public function getSupplementaries() : ?\ErvClient\Type\Supplementaries
    {
        return $this->supplementaries;
    }

    /**
     * @param null | \ErvClient\Type\Supplementaries $supplementaries
     * @return static
     */
    public function withSupplementaries(?\ErvClient\Type\Supplementaries $supplementaries) : static
    {
        $new = clone $this;
        $new->supplementaries = $supplementaries;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getItemId() : ?string
    {
        return $this->itemId;
    }

    /**
     * @param null | string $itemId
     * @return static
     */
    public function withItemId(?string $itemId) : static
    {
        $new = clone $this;
        $new->itemId = $itemId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getItemName() : ?string
    {
        return $this->itemName;
    }

    /**
     * @param null | string $itemName
     * @return static
     */
    public function withItemName(?string $itemName) : static
    {
        $new = clone $this;
        $new->itemName = $itemName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getItemDescription() : ?string
    {
        return $this->itemDescription;
    }

    /**
     * @param null | string $itemDescription
     * @return static
     */
    public function withItemDescription(?string $itemDescription) : static
    {
        $new = clone $this;
        $new->itemDescription = $itemDescription;

        return $new;
    }
}

