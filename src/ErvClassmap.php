<?php

namespace ErvClient;

use Soap\Encoding\ClassMap\ClassMapCollection;
use Soap\Encoding\ClassMap\ClassMap;

class ErvClassmap
{
    private const XML_NAMESPACE = 'https://secure.ervpojistovna.cz/ws/InsuranceService/3.5.0';

    public static function types(): \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap(self::XML_NAMESPACE, 'cancelPolicy', \ErvClient\Type\CancelPolicy::class),
            new ClassMap(self::XML_NAMESPACE, 'cancelPolicyResponse', \ErvClient\Type\CancelPolicyResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'PolicyResp', \ErvClient\Type\PolicyResp::class),
            new ClassMap(self::XML_NAMESPACE, 'respError', \ErvClient\Type\RespError::class),
            new ClassMap(self::XML_NAMESPACE, 'sendPolicyDraft', \ErvClient\Type\SendPolicyDraft::class),
            new ClassMap(self::XML_NAMESPACE, 'sendPolicyDraftResponse', \ErvClient\Type\SendPolicyDraftResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'SendPolicyResp', \ErvClient\Type\SendPolicyResp::class),
            new ClassMap(self::XML_NAMESPACE, 'sendPolicyAgreement', \ErvClient\Type\SendPolicyAgreement::class),
            new ClassMap(self::XML_NAMESPACE, 'sendPolicyAgreementResponse', \ErvClient\Type\SendPolicyAgreementResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'getPolicyInfo', \ErvClient\Type\GetPolicyInfo::class),
            new ClassMap(self::XML_NAMESPACE, 'getPolicyInfoResponse', \ErvClient\Type\GetPolicyInfoResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'PolicyInfoResp', \ErvClient\Type\PolicyInfoResp::class),
            new ClassMap(self::XML_NAMESPACE, 'PolicyInfo', \ErvClient\Type\PolicyInfo::class),
            new ClassMap(self::XML_NAMESPACE, 'InsuredPersonParms', \ErvClient\Type\InsuredPersonParms::class),
            new ClassMap(self::XML_NAMESPACE, 'InsuredPersonParmsSupplementaries', \ErvClient\Type\InsuredPersonParmsSupplementaries::class),
            new ClassMap(self::XML_NAMESPACE, 'PolicyHolderParms', \ErvClient\Type\PolicyHolderParms::class),
            new ClassMap(self::XML_NAMESPACE, 'createPolicy', \ErvClient\Type\CreatePolicy::class),
            new ClassMap(self::XML_NAMESPACE, 'PolicyParms', \ErvClient\Type\PolicyParms::class),
            new ClassMap(self::XML_NAMESPACE, 'PolicyParmsInsureds', \ErvClient\Type\PolicyParmsInsureds::class),
            new ClassMap(self::XML_NAMESPACE, 'createPolicyResponse', \ErvClient\Type\CreatePolicyResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'getSuitableProductsOffer', \ErvClient\Type\GetSuitableProductsOffer::class),
            new ClassMap(self::XML_NAMESPACE, 'getSuitableProductsOfferResponse', \ErvClient\Type\GetSuitableProductsOfferResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'SuitableProductsOfferResp', \ErvClient\Type\SuitableProductsOfferResp::class),
            new ClassMap(self::XML_NAMESPACE, 'SuitableProductOffer', \ErvClient\Type\SuitableProductOffer::class),
            new ClassMap(self::XML_NAMESPACE, 'SuitableTariffGroup', \ErvClient\Type\SuitableTariffGroup::class),
            new ClassMap(self::XML_NAMESPACE, 'SuitableTariff', \ErvClient\Type\SuitableTariff::class),
            new ClassMap(self::XML_NAMESPACE, 'calculatePolicyPremium', \ErvClient\Type\CalculatePolicyPremium::class),
            new ClassMap(self::XML_NAMESPACE, 'PolicyCalculatePremiumParms', \ErvClient\Type\PolicyCalculatePremiumParms::class),
            new ClassMap(self::XML_NAMESPACE, 'InsuredPersonCalculatePremiumParms', \ErvClient\Type\InsuredPersonCalculatePremiumParms::class),
            new ClassMap(self::XML_NAMESPACE, 'InsuredPersonCalculatePremiumParmsSupplementaries', \ErvClient\Type\InsuredPersonCalculatePremiumParmsSupplementaries::class),
            new ClassMap(self::XML_NAMESPACE, 'calculatePolicyPremiumResponse', \ErvClient\Type\CalculatePolicyPremiumResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'PolicyPremiumResp', \ErvClient\Type\PolicyPremiumResp::class),
            new ClassMap(self::XML_NAMESPACE, 'PriceInfo', \ErvClient\Type\PriceInfo::class),
            new ClassMap(self::XML_NAMESPACE, 'PriceCurrency', \ErvClient\Type\PriceCurrency::class),
            new ClassMap(self::XML_NAMESPACE, 'getCheapestProduct', \ErvClient\Type\GetCheapestProduct::class),
            new ClassMap(self::XML_NAMESPACE, 'getCheapestProductResponse', \ErvClient\Type\GetCheapestProductResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'ProductsOfferResp', \ErvClient\Type\ProductsOfferResp::class),
            new ClassMap(self::XML_NAMESPACE, 'ProductOffer', \ErvClient\Type\ProductOffer::class),
            new ClassMap(self::XML_NAMESPACE, 'getPolicyDraft', \ErvClient\Type\GetPolicyDraft::class),
            new ClassMap(self::XML_NAMESPACE, 'getPolicyDraftResponse', \ErvClient\Type\GetPolicyDraftResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'DocumentDataResp', \ErvClient\Type\DocumentDataResp::class),
            new ClassMap(self::XML_NAMESPACE, 'documentData', \ErvClient\Type\DocumentData::class),
            new ClassMap(self::XML_NAMESPACE, 'getCompleteProductsOffer', \ErvClient\Type\GetCompleteProductsOffer::class),
            new ClassMap(self::XML_NAMESPACE, 'getCompleteProductsOfferResponse', \ErvClient\Type\GetCompleteProductsOfferResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'getSupplementariesOffer', \ErvClient\Type\GetSupplementariesOffer::class),
            new ClassMap(self::XML_NAMESPACE, 'getSupplementariesOfferResponse', \ErvClient\Type\GetSupplementariesOfferResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'SupplementariesOfferResp', \ErvClient\Type\SupplementariesOfferResp::class),
            new ClassMap(self::XML_NAMESPACE, 'SupplementaryTariffOffer', \ErvClient\Type\SupplementaryTariffOffer::class),
            new ClassMap(self::XML_NAMESPACE, 'getPolicyAgreement', \ErvClient\Type\GetPolicyAgreement::class),
            new ClassMap(self::XML_NAMESPACE, 'getPolicyAgreementResponse', \ErvClient\Type\GetPolicyAgreementResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'userLogin', \ErvClient\Type\UserLogin::class),
            new ClassMap(self::XML_NAMESPACE, 'userLoginResponse', \ErvClient\Type\UserLoginResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'loginResp', \ErvClient\Type\LoginResp::class),
            new ClassMap(self::XML_NAMESPACE, 'getProductsOffer', \ErvClient\Type\GetProductsOffer::class),
            new ClassMap(self::XML_NAMESPACE, 'getProductsOfferResponse', \ErvClient\Type\GetProductsOfferResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'activatePolicy', \ErvClient\Type\ActivatePolicy::class),
            new ClassMap(self::XML_NAMESPACE, 'activatePolicyResponse', \ErvClient\Type\ActivatePolicyResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'getProducts', \ErvClient\Type\GetProducts::class),
            new ClassMap(self::XML_NAMESPACE, 'getProductsResponse', \ErvClient\Type\GetProductsResponse::class),
            new ClassMap(self::XML_NAMESPACE, 'ProductsResp', \ErvClient\Type\ProductsResp::class),
            new ClassMap(self::XML_NAMESPACE, 'Product', \ErvClient\Type\Product::class),
        );
    }

    public static function enums(): \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(

        );
    }
}

