<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GelenTamamlananRapolariAl implements RequestInterface
{
    /**
     * @var string
     */
    private $gonderenVknTckn;

    /**
     * @var string
     */
    private $aliciVknTckn;

    /**
     * @var string
     */
    private $gelisBasTarihi;

    /**
     * @var string
     */
    private $gelisBitTarihi;

    /**
     * Constructor
     *
     * @var string $gonderenVknTckn
     * @var string $aliciVknTckn
     * @var string $gelisBasTarihi
     * @var string $gelisBitTarihi
     */
    public function __construct($gonderenVknTckn, $aliciVknTckn, $gelisBasTarihi, $gelisBitTarihi)
    {
        $this->gonderenVknTckn = $gonderenVknTckn;
        $this->aliciVknTckn = $aliciVknTckn;
        $this->gelisBasTarihi = $gelisBasTarihi;
        $this->gelisBitTarihi = $gelisBitTarihi;
    }

    /**
     * @return string
     */
    public function getGonderenVknTckn()
    {
        return $this->gonderenVknTckn;
    }

    /**
     * @param string $gonderenVknTckn
     * @return GelenTamamlananRapolariAl
     */
    public function withGonderenVknTckn($gonderenVknTckn)
    {
        $new = clone $this;
        $new->gonderenVknTckn = $gonderenVknTckn;

        return $new;
    }

    /**
     * @return string
     */
    public function getAliciVknTckn()
    {
        return $this->aliciVknTckn;
    }

    /**
     * @param string $aliciVknTckn
     * @return GelenTamamlananRapolariAl
     */
    public function withAliciVknTckn($aliciVknTckn)
    {
        $new = clone $this;
        $new->aliciVknTckn = $aliciVknTckn;

        return $new;
    }

    /**
     * @return string
     */
    public function getGelisBasTarihi()
    {
        return $this->gelisBasTarihi;
    }

    /**
     * @param string $gelisBasTarihi
     * @return GelenTamamlananRapolariAl
     */
    public function withGelisBasTarihi($gelisBasTarihi)
    {
        $new = clone $this;
        $new->gelisBasTarihi = $gelisBasTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getGelisBitTarihi()
    {
        return $this->gelisBitTarihi;
    }

    /**
     * @param string $gelisBitTarihi
     * @return GelenTamamlananRapolariAl
     */
    public function withGelisBitTarihi($gelisBitTarihi)
    {
        $new = clone $this;
        $new->gelisBitTarihi = $gelisBitTarihi;

        return $new;
    }
}

