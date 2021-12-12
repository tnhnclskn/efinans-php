<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BelgeGonderExt implements RequestInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\GidenBelgeParametreleri
     */
    private $parametreler;

    /**
     * Constructor
     *
     * @var \Tnhnclskn\Efinans\Type\GidenBelgeParametreleri $parametreler
     */
    public function __construct($parametreler)
    {
        $this->parametreler = $parametreler;
    }

    /**
     * @return \Tnhnclskn\Efinans\Type\GidenBelgeParametreleri
     */
    public function getParametreler()
    {
        return $this->parametreler;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\GidenBelgeParametreleri $parametreler
     * @return BelgeGonderExt
     */
    public function withParametreler($parametreler)
    {
        $new = clone $this;
        $new->parametreler = $parametreler;

        return $new;
    }
}

