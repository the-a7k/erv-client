<?php

namespace ErvClient;

use ErvClient\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class ErvClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('cancelPolicy', Type\CancelPolicy::class),
            new ClassMap('cancelPolicyResponse', Type\CancelPolicyResponse::class),
            new ClassMap('PolicyResp', Type\PolicyResp::class),
            new ClassMap('respError', Type\RespError::class),
            new ClassMap('sendPolicyDraft', Type\SendPolicyDraft::class),
            new ClassMap('sendPolicyDraftResponse', Type\SendPolicyDraftResponse::class),
            new ClassMap('SendPolicyResp', Type\SendPolicyResp::class),
            new ClassMap('sendPolicyAgreement', Type\SendPolicyAgreement::class),
            new ClassMap('sendPolicyAgreementResponse', Type\SendPolicyAgreementResponse::class),
            new ClassMap('getPolicyInfo', Type\GetPolicyInfo::class),
            new ClassMap('getPolicyInfoResponse', Type\GetPolicyInfoResponse::class),
            new ClassMap('PolicyInfoResp', Type\PolicyInfoResp::class),
            new ClassMap('PolicyInfo', Type\PolicyInfo::class),
            new ClassMap('InsuredPersonParms', Type\InsuredPersonParms::class),
            new ClassMap('supplementaries', Type\Supplementaries::class),
            new ClassMap('PolicyHolderParms', Type\PolicyHolderParms::class),
            new ClassMap('createPolicy', Type\CreatePolicy::class),
            new ClassMap('PolicyParms', Type\PolicyParms::class),
            new ClassMap('insureds', Type\Insureds::class),
            new ClassMap('createPolicyResponse', Type\CreatePolicyResponse::class),
            new ClassMap('getSuitableProductsOffer', Type\GetSuitableProductsOffer::class),
            new ClassMap('getSuitableProductsOfferResponse', Type\GetSuitableProductsOfferResponse::class),
            new ClassMap('SuitableProductsOfferResp', Type\SuitableProductsOfferResp::class),
            new ClassMap('SuitableProductOffer', Type\SuitableProductOffer::class),
            new ClassMap('SuitableTariffGroup', Type\SuitableTariffGroup::class),
            new ClassMap('SuitableTariff', Type\SuitableTariff::class),
            new ClassMap('calculatePolicyPremium', Type\CalculatePolicyPremium::class),
            new ClassMap('PolicyCalculatePremiumParms', Type\PolicyCalculatePremiumParms::class),
            new ClassMap('InsuredPersonCalculatePremiumParms', Type\InsuredPersonCalculatePremiumParms::class),
            new ClassMap('calculatePolicyPremiumResponse', Type\CalculatePolicyPremiumResponse::class),
            new ClassMap('PolicyPremiumResp', Type\PolicyPremiumResp::class),
            new ClassMap('PriceInfo', Type\PriceInfo::class),
            new ClassMap('PriceCurrency', Type\PriceCurrency::class),
            new ClassMap('getCheapestProduct', Type\GetCheapestProduct::class),
            new ClassMap('getCheapestProductResponse', Type\GetCheapestProductResponse::class),
            new ClassMap('ProductsOfferResp', Type\ProductsOfferResp::class),
            new ClassMap('ProductOffer', Type\ProductOffer::class),
            new ClassMap('getPolicyDraft', Type\GetPolicyDraft::class),
            new ClassMap('getPolicyDraftResponse', Type\GetPolicyDraftResponse::class),
            new ClassMap('DocumentDataResp', Type\DocumentDataResp::class),
            new ClassMap('documentData', Type\DocumentData::class),
            new ClassMap('getCompleteProductsOffer', Type\GetCompleteProductsOffer::class),
            new ClassMap('getCompleteProductsOfferResponse', Type\GetCompleteProductsOfferResponse::class),
            new ClassMap('getSupplementariesOffer', Type\GetSupplementariesOffer::class),
            new ClassMap('getSupplementariesOfferResponse', Type\GetSupplementariesOfferResponse::class),
            new ClassMap('SupplementariesOfferResp', Type\SupplementariesOfferResp::class),
            new ClassMap('SupplementaryTariffOffer', Type\SupplementaryTariffOffer::class),
            new ClassMap('getPolicyAgreement', Type\GetPolicyAgreement::class),
            new ClassMap('getPolicyAgreementResponse', Type\GetPolicyAgreementResponse::class),
            new ClassMap('userLogin', Type\UserLogin::class),
            new ClassMap('userLoginResponse', Type\UserLoginResponse::class),
            new ClassMap('loginResp', Type\LoginResp::class),
            new ClassMap('getProductsOffer', Type\GetProductsOffer::class),
            new ClassMap('getProductsOfferResponse', Type\GetProductsOfferResponse::class),
            new ClassMap('activatePolicy', Type\ActivatePolicy::class),
            new ClassMap('activatePolicyResponse', Type\ActivatePolicyResponse::class),
            new ClassMap('getProducts', Type\GetProducts::class),
            new ClassMap('getProductsResponse', Type\GetProductsResponse::class),
            new ClassMap('ProductsResp', Type\ProductsResp::class),
            new ClassMap('Product', Type\Product::class),
        );
    }
}

