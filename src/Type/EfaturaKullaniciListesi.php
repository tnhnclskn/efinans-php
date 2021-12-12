<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EfaturaKullaniciListesi implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNoListesi;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNoListesi
     */
    public function __construct($vergiTcKimlikNoListesi)
    {
        $this->vergiTcKimlikNoListesi = $vergiTcKimlikNoListesi;
    }

    /**
     * @return string
     */
    public function getVergiTcKimlikNoListesi()
    {
        return $this->vergiTcKimlikNoListesi;
    }

    /**
     * @param string $vergiTcKimlikNoListesi
     * @return EfaturaKullaniciListesi
     */
    public function withVergiTcKimlikNoListesi($vergiTcKimlikNoListesi)
    {
        $new = clone $this;
        $new->vergiTcKimlikNoListesi = $vergiTcKimlikNoListesi;

        return $new;
    }
}

