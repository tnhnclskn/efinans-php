<?php

namespace Tnhnclskn\Efinans;

use Tnhnclskn\Efinans\EfinansClient;
use Tnhnclskn\Efinans\EfinansClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class EfinansClientFactory
{
    public static function factory(string $wsdl) : \Tnhnclskn\Efinans\EfinansClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(EfinansClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new EfinansClient($caller);
    }
}

