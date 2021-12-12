<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CokluGidenBelgeDurumSorgula implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var \Tnhnclskn\Efinans\Type\GidenBelgeDurumParametreleri
     */
    private $parametreler;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var \Tnhnclskn\Efinans\Type\GidenBelgeDurumParametreleri $parametreler
     */
    public function __construct($vergiTcKimlikNo, $parametreler)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->parametreler = $parametreler;
    }

    /**
     * @return string
     */
    public function getVergiTcKimlikNo()
    {
        return $this->vergiTcKimlikNo;
    }

    /**
     * @param string $vergiTcKimlikNo
     * @return CokluGidenBelgeDurumSorgula
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }

    /**
     * @return \Tnhnclskn\Efinans\Type\GidenBelgeDurumParametreleri
     */
    public function getParametreler()
    {
        return $this->parametreler;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\GidenBelgeDurumParametreleri $parametreler
     * @return CokluGidenBelgeDurumSorgula
     */
    public function withParametreler($parametreler)
    {
        $new = clone $this;
        $new->parametreler = $parametreler;

        return $new;
    }
}

