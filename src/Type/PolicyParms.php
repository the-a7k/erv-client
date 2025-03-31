<?php

namespace ErvClient\Type;

class PolicyParms
{
    /**
     * @var null | string
     */
    private ?string $destination = null;

    /**
     * @var \ErvClient\Type\Insureds
     */
    private \ErvClient\Type\Insureds $insureds;

    /**
     * @var null | string
     */
    private ?string $issuedOn = null;

    /**
     * @var string
     */
    private string $lastDay;

    /**
     * @var null | string
     */
    private ?string $officeID = null;

    /**
     * @var bool
     */
    private bool $organized;

    /**
     * @var \ErvClient\Type\PolicyHolderParms
     */
    private \ErvClient\Type\PolicyHolderParms $policyHolder;

    /**
     * @var int
     */
    private int $productCode;

    /**
     * @var string
     */
    private string $regionCode;

    /**
     * @var null | string
     */
    private ?string $seller = null;

    /**
     * @var string
     */
    private string $startDay;

    /**
     * @var null | string
     */
    private ?string $transport = null;

    /**
     * @return null | string
     */
    public function getDestination() : ?string
    {
        return $this->destination;
    }

    /**
     * @param null | string $destination
     * @return static
     */
    public function withDestination(?string $destination) : static
    {
        $new = clone $this;
        $new->destination = $destination;

        return $new;
    }

    /**
     * @return \ErvClient\Type\Insureds
     */
    public function getInsureds() : \ErvClient\Type\Insureds
    {
        return $this->insureds;
    }

    /**
     * @param \ErvClient\Type\Insureds $insureds
     * @return static
     */
    public function withInsureds(\ErvClient\Type\Insureds $insureds) : static
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
     * @return null | string
     */
    public function getOfficeID() : ?string
    {
        return $this->officeID;
    }

    /**
     * @param null | string $officeID
     * @return static
     */
    public function withOfficeID(?string $officeID) : static
    {
        $new = clone $this;
        $new->officeID = $officeID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOrganized() : bool
    {
        return $this->organized;
    }

    /**
     * @param bool $organized
     * @return static
     */
    public function withOrganized(bool $organized) : static
    {
        $new = clone $this;
        $new->organized = $organized;

        return $new;
    }

    /**
     * @return \ErvClient\Type\PolicyHolderParms
     */
    public function getPolicyHolder() : \ErvClient\Type\PolicyHolderParms
    {
        return $this->policyHolder;
    }

    /**
     * @param \ErvClient\Type\PolicyHolderParms $policyHolder
     * @return static
     */
    public function withPolicyHolder(\ErvClient\Type\PolicyHolderParms $policyHolder) : static
    {
        $new = clone $this;
        $new->policyHolder = $policyHolder;

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
     * @return null | string
     */
    public function getSeller() : ?string
    {
        return $this->seller;
    }

    /**
     * @param null | string $seller
     * @return static
     */
    public function withSeller(?string $seller) : static
    {
        $new = clone $this;
        $new->seller = $seller;

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

    /**
     * @return null | string
     */
    public function getTransport() : ?string
    {
        return $this->transport;
    }

    /**
     * @param null | string $transport
     * @return static
     */
    public function withTransport(?string $transport) : static
    {
        $new = clone $this;
        $new->transport = $transport;

        return $new;
    }
}

