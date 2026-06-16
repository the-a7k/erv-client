<?php

namespace ErvClient;

use ErvClient\ErvClient;
use ErvClient\ErvClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Encoding\EncoderRegistry;

class ErvClientFactory
{
    /**
     * @param non-empty-string $wsdl
     */
    public static function factory(string $wsdl): \ErvClient\ErvClient
    {
        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdl)
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(ErvClassmap::types())
                        ->addBackedEnumClassMapCollection(ErvClassmap::enums())
                )
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new ErvClient($caller);
    }
}

