<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeDurumSorgulaPortal implements RequestInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\GidenBelgelerDurumSorgulaPortalParametreleri
     */
    private $parametreler;

    /**
     * Constructor
     *
     * @var \Tnhnclskn\Efinans\Type\GidenBelgelerDurumSorgulaPortalParametreleri $parametreler
     */
    public function __construct($parametreler)
    {
        $this->parametreler = $parametreler;
    }

    /**
     * @return \Tnhnclskn\Efinans\Type\GidenBelgelerDurumSorgulaPortalParametreleri
     */
    public function getParametreler()
    {
        return $this->parametreler;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\GidenBelgelerDurumSorgulaPortalParametreleri $parametreler
     * @return GidenBelgeDurumSorgulaPortal
     */
    public function withParametreler($parametreler)
    {
        $new = clone $this;
        $new->parametreler = $parametreler;

        return $new;
    }
}

