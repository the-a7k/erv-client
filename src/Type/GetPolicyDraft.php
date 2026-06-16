<?php

namespace ErvClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPolicyDraft implements RequestInterface
{
    /**
     * @var string
     */
    private string $uniqueId;

    /**
     * @var int
     */
    private int $policyNumber;

    /**
     * @var string
     */
    private string $language;

    /**
     * @var null | string
     */
    private ?string $specTemplateCode = null;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param int $policyNumber
     * @param string $language
     * @param null | string $specTemplateCode
     */
    public function __construct(string $uniqueId, int $policyNumber, string $language, ?string $specTemplateCode = null)
    {
        $this->uniqueId = $uniqueId;
        $this->policyNumber = $policyNumber;
        $this->language = $language;
        $this->specTemplateCode = $specTemplateCode;
    }

    /**
     * @return string
     */
    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return static
     */
    public function withUniqueId(string $uniqueId): static
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return int
     */
    public function getPolicyNumber(): int
    {
        return $this->policyNumber;
    }

    /**
     * @param int $policyNumber
     * @return static
     */
    public function withPolicyNumber(int $policyNumber): static
    {
        $new = clone $this;
        $new->policyNumber = $policyNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return static
     */
    public function withLanguage(string $language): static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSpecTemplateCode(): ?string
    {
        return $this->specTemplateCode;
    }

    /**
     * @param null | string $specTemplateCode
     * @return static
     */
    public function withSpecTemplateCode(?string $specTemplateCode): static
    {
        $new = clone $this;
        $new->specTemplateCode = $specTemplateCode;

        return $new;
    }
}

