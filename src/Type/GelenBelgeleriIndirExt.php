<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GelenBelgeleriIndirExt implements RequestInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\GelenBelgeParametreleri
     */
    private $parametreler;

    /**
     * Constructor
     *
     * @var \Tnhnclskn\Efinans\Type\GelenBelgeParametreleri $parametreler
     */
    public function __construct($parametreler)
    {
        $this->parametreler = $parametreler;
    }

    /**
     * @return \Tnhnclskn\Efinans\Type\GelenBelgeParametreleri
     */
    public function getParametreler()
    {
        return $this->parametreler;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\GelenBelgeParametreleri $parametreler
     * @return GelenBelgeleriIndirExt
     */
    public function withParametreler($parametreler)
    {
        $new = clone $this;
        $new->parametreler = $parametreler;

        return $new;
    }
}

