<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeDurumSorgulaExt implements RequestInterface
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
     * @return GidenBelgeDurumSorgulaExt
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
     * @return GidenBelgeDurumSorgulaExt
     */
    public function withParametreler($parametreler)
    {
        $new = clone $this;
        $new->parametreler = $parametreler;

        return $new;
    }
}

