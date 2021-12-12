<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ErpBilgileriBelirle implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var \Tnhnclskn\Efinans\Type\ErpBilgileri
     */
    private $erpBilgileri;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var \Tnhnclskn\Efinans\Type\ErpBilgileri $erpBilgileri
     */
    public function __construct($vergiTcKimlikNo, $erpBilgileri)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->erpBilgileri = $erpBilgileri;
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
     * @return ErpBilgileriBelirle
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }

    /**
     * @return \Tnhnclskn\Efinans\Type\ErpBilgileri
     */
    public function getErpBilgileri()
    {
        return $this->erpBilgileri;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\ErpBilgileri $erpBilgileri
     * @return ErpBilgileriBelirle
     */
    public function withErpBilgileri($erpBilgileri)
    {
        $new = clone $this;
        $new->erpBilgileri = $erpBilgileri;

        return $new;
    }
}

