<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeleriListele implements RequestInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\GidenBelgeleriListeleParametreleri
     */
    private $parametreler;

    /**
     * Constructor
     *
     * @var \Tnhnclskn\Efinans\Type\GidenBelgeleriListeleParametreleri $parametreler
     */
    public function __construct($parametreler)
    {
        $this->parametreler = $parametreler;
    }

    /**
     * @return \Tnhnclskn\Efinans\Type\GidenBelgeleriListeleParametreleri
     */
    public function getParametreler()
    {
        return $this->parametreler;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\GidenBelgeleriListeleParametreleri $parametreler
     * @return GidenBelgeleriListele
     */
    public function withParametreler($parametreler)
    {
        $new = clone $this;
        $new->parametreler = $parametreler;

        return $new;
    }
}

