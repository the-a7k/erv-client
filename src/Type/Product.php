<?php

namespace ErvClient\Type;

class Product
{
    /**
     * @var null | string
     */
    private ?string $code = null;

    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * @var null | string
     */
    private ?string $duration = null;

    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | string
     */
    private ?string $productType = null;

    /**
     * @var null | string
     */
    private ?string $regionCode = null;

    /**
     * @var null | string
     */
    private ?string $repeat = null;

    /**
     * @var null | string
     */
    private ?string $shortcut = null;

    /**
     * @var null | string
     */
    private ?string $usageInfo = null;

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
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @param null | string $duration
     * @return static
     */
    public function withDuration(?string $duration): static
    {
        $new = clone $this;
        $new->duration = $duration;

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
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    /**
     * @param null | string $productType
     * @return static
     */
    public function withProductType(?string $productType): static
    {
        $new = clone $this;
        $new->productType = $productType;

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
    public function getRepeat(): ?string
    {
        return $this->repeat;
    }

    /**
     * @param null | string $repeat
     * @return static
     */
    public function withRepeat(?string $repeat): static
    {
        $new = clone $this;
        $new->repeat = $repeat;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getShortcut(): ?string
    {
        return $this->shortcut;
    }

    /**
     * @param null | string $shortcut
     * @return static
     */
    public function withShortcut(?string $shortcut): static
    {
        $new = clone $this;
        $new->shortcut = $shortcut;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUsageInfo(): ?string
    {
        return $this->usageInfo;
    }

    /**
     * @param null | string $usageInfo
     * @return static
     */
    public function withUsageInfo(?string $usageInfo): static
    {
        $new = clone $this;
        $new->usageInfo = $usageInfo;

        return $new;
    }
}

