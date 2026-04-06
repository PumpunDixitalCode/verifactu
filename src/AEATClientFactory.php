<?php

namespace jdgOpenCode\verifactu;

use jdgOpenCode\verifactu\AEATClient;
use jdgOpenCode\verifactu\AEATClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class AEATClientFactory
{
    public static function factory(string $wsdl) : \jdgOpenCode\verifactu\AEATClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(AEATClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new AEATClient($caller);
    }
}

