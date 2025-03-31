<?php

namespace ErvClient;

use Phpro\SoapClient\Caller\Caller;
use ErvClient\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class ErvClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\CancelPolicy $parameters
     * @return ResultInterface & Type\CancelPolicyResponse
     * @throws SoapException
     */
    public function cancelPolicy(\ErvClient\Type\CancelPolicy $parameters) : \ErvClient\Type\CancelPolicyResponse
    {
        $response = ($this->caller)('cancelPolicy', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\CancelPolicyResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendPolicyDraft $parameters
     * @return ResultInterface & Type\SendPolicyDraftResponse
     * @throws SoapException
     */
    public function sendPolicyDraft(\ErvClient\Type\SendPolicyDraft $parameters) : \ErvClient\Type\SendPolicyDraftResponse
    {
        $response = ($this->caller)('sendPolicyDraft', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\SendPolicyDraftResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SendPolicyAgreement $parameters
     * @return ResultInterface & Type\SendPolicyAgreementResponse
     * @throws SoapException
     */
    public function sendPolicyAgreement(\ErvClient\Type\SendPolicyAgreement $parameters) : \ErvClient\Type\SendPolicyAgreementResponse
    {
        $response = ($this->caller)('sendPolicyAgreement', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\SendPolicyAgreementResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPolicyInfo $parameters
     * @return ResultInterface & Type\GetPolicyInfoResponse
     * @throws SoapException
     */
    public function getPolicyInfo(\ErvClient\Type\GetPolicyInfo $parameters) : \ErvClient\Type\GetPolicyInfoResponse
    {
        $response = ($this->caller)('getPolicyInfo', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\GetPolicyInfoResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CreatePolicy $parameters
     * @return ResultInterface & Type\CreatePolicyResponse
     * @throws SoapException
     */
    public function createPolicy(\ErvClient\Type\CreatePolicy $parameters) : \ErvClient\Type\CreatePolicyResponse
    {
        $response = ($this->caller)('createPolicy', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\CreatePolicyResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetSuitableProductsOffer $parameters
     * @return ResultInterface & Type\GetSuitableProductsOfferResponse
     * @throws SoapException
     */
    public function getSuitableProductsOffer(\ErvClient\Type\GetSuitableProductsOffer $parameters) : \ErvClient\Type\GetSuitableProductsOfferResponse
    {
        $response = ($this->caller)('getSuitableProductsOffer', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\GetSuitableProductsOfferResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\CalculatePolicyPremium $parameters
     * @return ResultInterface & Type\CalculatePolicyPremiumResponse
     * @throws SoapException
     */
    public function calculatePolicyPremium(\ErvClient\Type\CalculatePolicyPremium $parameters) : \ErvClient\Type\CalculatePolicyPremiumResponse
    {
        $response = ($this->caller)('calculatePolicyPremium', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\CalculatePolicyPremiumResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCheapestProduct $parameters
     * @return ResultInterface & Type\GetCheapestProductResponse
     * @throws SoapException
     */
    public function getCheapestProduct(\ErvClient\Type\GetCheapestProduct $parameters) : \ErvClient\Type\GetCheapestProductResponse
    {
        $response = ($this->caller)('getCheapestProduct', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\GetCheapestProductResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPolicyDraft $parameters
     * @return ResultInterface & Type\GetPolicyDraftResponse
     * @throws SoapException
     */
    public function getPolicyDraft(\ErvClient\Type\GetPolicyDraft $parameters) : \ErvClient\Type\GetPolicyDraftResponse
    {
        $response = ($this->caller)('getPolicyDraft', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\GetPolicyDraftResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetCompleteProductsOffer $parameters
     * @return ResultInterface & Type\GetCompleteProductsOfferResponse
     * @throws SoapException
     */
    public function getCompleteProductsOffer(\ErvClient\Type\GetCompleteProductsOffer $parameters) : \ErvClient\Type\GetCompleteProductsOfferResponse
    {
        $response = ($this->caller)('getCompleteProductsOffer', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\GetCompleteProductsOfferResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetSupplementariesOffer $parameters
     * @return ResultInterface & Type\GetSupplementariesOfferResponse
     * @throws SoapException
     */
    public function getSupplementariesOffer(\ErvClient\Type\GetSupplementariesOffer $parameters) : \ErvClient\Type\GetSupplementariesOfferResponse
    {
        $response = ($this->caller)('getSupplementariesOffer', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\GetSupplementariesOfferResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetPolicyAgreement $parameters
     * @return ResultInterface & Type\GetPolicyAgreementResponse
     * @throws SoapException
     */
    public function getPolicyAgreement(\ErvClient\Type\GetPolicyAgreement $parameters) : \ErvClient\Type\GetPolicyAgreementResponse
    {
        $response = ($this->caller)('getPolicyAgreement', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\GetPolicyAgreementResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\UserLogin $parameters
     * @return ResultInterface & Type\UserLoginResponse
     * @throws SoapException
     */
    public function userLogin(\ErvClient\Type\UserLogin $parameters) : \ErvClient\Type\UserLoginResponse
    {
        $response = ($this->caller)('userLogin', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\UserLoginResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetProductsOffer $parameters
     * @return ResultInterface & Type\GetProductsOfferResponse
     * @throws SoapException
     */
    public function getProductsOffer(\ErvClient\Type\GetProductsOffer $parameters) : \ErvClient\Type\GetProductsOfferResponse
    {
        $response = ($this->caller)('getProductsOffer', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\GetProductsOfferResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ActivatePolicy $parameters
     * @return ResultInterface & Type\ActivatePolicyResponse
     * @throws SoapException
     */
    public function activatePolicy(\ErvClient\Type\ActivatePolicy $parameters) : \ErvClient\Type\ActivatePolicyResponse
    {
        $response = ($this->caller)('activatePolicy', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\ActivatePolicyResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\GetProducts $parameters
     * @return ResultInterface & Type\GetProductsResponse
     * @throws SoapException
     */
    public function getProducts(\ErvClient\Type\GetProducts $parameters) : \ErvClient\Type\GetProductsResponse
    {
        $response = ($this->caller)('getProducts', $parameters);

        \Psl\Type\instance_of(\ErvClient\Type\GetProductsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

