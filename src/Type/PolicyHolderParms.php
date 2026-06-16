<?php

namespace ErvClient\Type;

class PolicyHolderParms
{
    /**
     * @var null | string
     */
    private ?string $city = null;

    /**
     * @var null | string
     */
    private ?string $compName = null;

    /**
     * @var null | string
     */
    private ?string $country = null;

    /**
     * @var null | string
     */
    private ?string $email = null;

    /**
     * @var null | string
     */
    private ?string $fax = null;

    /**
     * @var null | string
     */
    private ?string $ico = null;

    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | string
     */
    private ?string $number = null;

    /**
     * @var bool
     */
    private bool $isPerson;

    /**
     * @var null | string
     */
    private ?string $phone = null;

    /**
     * @var null | string
     */
    private ?string $pin = null;

    /**
     * @var null | string
     */
    private ?string $sex = null;

    /**
     * @var null | string
     */
    private ?string $street = null;

    /**
     * @var null | string
     */
    private ?string $surname = null;

    /**
     * @var null | string
     */
    private ?string $title = null;

    /**
     * @var null | string
     */
    private ?string $zip = null;

    /**
     * @return null | string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param null | string $city
     * @return static
     */
    public function withCity(?string $city): static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCompName(): ?string
    {
        return $this->compName;
    }

    /**
     * @param null | string $compName
     * @return static
     */
    public function withCompName(?string $compName): static
    {
        $new = clone $this;
        $new->compName = $compName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param null | string $country
     * @return static
     */
    public function withCountry(?string $country): static
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null | string $email
     * @return static
     */
    public function withEmail(?string $email): static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @param null | string $fax
     * @return static
     */
    public function withFax(?string $fax): static
    {
        $new = clone $this;
        $new->fax = $fax;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIco(): ?string
    {
        return $this->ico;
    }

    /**
     * @param null | string $ico
     * @return static
     */
    public function withIco(?string $ico): static
    {
        $new = clone $this;
        $new->ico = $ico;

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
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param null | string $number
     * @return static
     */
    public function withNumber(?string $number): static
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsPerson(): bool
    {
        return $this->isPerson;
    }

    /**
     * @param bool $isPerson
     * @return static
     */
    public function withIsPerson(bool $isPerson): static
    {
        $new = clone $this;
        $new->isPerson = $isPerson;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param null | string $phone
     * @return static
     */
    public function withPhone(?string $phone): static
    {
        $new = clone $this;
        $new->phone = $phone;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPin(): ?string
    {
        return $this->pin;
    }

    /**
     * @param null | string $pin
     * @return static
     */
    public function withPin(?string $pin): static
    {
        $new = clone $this;
        $new->pin = $pin;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSex(): ?string
    {
        return $this->sex;
    }

    /**
     * @param null | string $sex
     * @return static
     */
    public function withSex(?string $sex): static
    {
        $new = clone $this;
        $new->sex = $sex;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param null | string $street
     * @return static
     */
    public function withStreet(?string $street): static
    {
        $new = clone $this;
        $new->street = $street;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * @param null | string $surname
     * @return static
     */
    public function withSurname(?string $surname): static
    {
        $new = clone $this;
        $new->surname = $surname;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param null | string $title
     * @return static
     */
    public function withTitle(?string $title): static
    {
        $new = clone $this;
        $new->title = $title;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * @param null | string $zip
     * @return static
     */
    public function withZip(?string $zip): static
    {
        $new = clone $this;
        $new->zip = $zip;

        return $new;
    }
}

