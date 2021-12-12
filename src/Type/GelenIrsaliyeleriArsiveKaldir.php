<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GelenIrsaliyeleriArsiveKaldir implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $despatchEttnListesi;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $despatchEttnListesi
     */
    public function __construct($vergiTcKimlikNo, $despatchEttnListesi)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->despatchEttnListesi = $despatchEttnListesi;
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
     * @return GelenIrsaliyeleriArsiveKaldir
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getDespatchEttnListesi()
    {
        return $this->despatchEttnListesi;
    }

    /**
     * @param string $despatchEttnListesi
     * @return GelenIrsaliyeleriArsiveKaldir
     */
    public function withDespatchEttnListesi($despatchEttnListesi)
    {
        $new = clone $this;
        $new->despatchEttnListesi = $despatchEttnListesi;

        return $new;
    }
}

