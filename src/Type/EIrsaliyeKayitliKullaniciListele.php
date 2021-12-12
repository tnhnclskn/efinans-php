<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EIrsaliyeKayitliKullaniciListele implements RequestInterface
{
    /**
     * @var string
     */
    private $kayitZamani;

    /**
     * Constructor
     *
     * @var string $kayitZamani
     */
    public function __construct($kayitZamani)
    {
        $this->kayitZamani = $kayitZamani;
    }

    /**
     * @return string
     */
    public function getKayitZamani()
    {
        return $this->kayitZamani;
    }

    /**
     * @param string $kayitZamani
     * @return EIrsaliyeKayitliKullaniciListele
     */
    public function withKayitZamani($kayitZamani)
    {
        $new = clone $this;
        $new->kayitZamani = $kayitZamani;

        return $new;
    }
}

