<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class KayitliKullaniciListeleExtendedVknTckn implements RequestInterface
{
    /**
     * @var string
     */
    private $vknTckn;

    /**
     * @var string
     */
    private $urun;

    /**
     * Constructor
     *
     * @var string $vknTckn
     * @var string $urun
     */
    public function __construct($vknTckn, $urun)
    {
        $this->vknTckn = $vknTckn;
        $this->urun = $urun;
    }

    /**
     * @return string
     */
    public function getVknTckn()
    {
        return $this->vknTckn;
    }

    /**
     * @param string $vknTckn
     * @return KayitliKullaniciListeleExtendedVknTckn
     */
    public function withVknTckn($vknTckn)
    {
        $new = clone $this;
        $new->vknTckn = $vknTckn;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrun()
    {
        return $this->urun;
    }

    /**
     * @param string $urun
     * @return KayitliKullaniciListeleExtendedVknTckn
     */
    public function withUrun($urun)
    {
        $new = clone $this;
        $new->urun = $urun;

        return $new;
    }
}

