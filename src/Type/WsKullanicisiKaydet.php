<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class WsKullanicisiKaydet implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $urunList;

    /**
     * @var string
     */
    private $erpKodu;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $urunList
     * @var string $erpKodu
     */
    public function __construct($vergiTcKimlikNo, $urunList, $erpKodu)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->urunList = $urunList;
        $this->erpKodu = $erpKodu;
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
     * @return WsKullanicisiKaydet
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
    public function getUrunList()
    {
        return $this->urunList;
    }

    /**
     * @param string $urunList
     * @return WsKullanicisiKaydet
     */
    public function withUrunList($urunList)
    {
        $new = clone $this;
        $new->urunList = $urunList;

        return $new;
    }

    /**
     * @return string
     */
    public function getErpKodu()
    {
        return $this->erpKodu;
    }

    /**
     * @param string $erpKodu
     * @return WsKullanicisiKaydet
     */
    public function withErpKodu($erpKodu)
    {
        $new = clone $this;
        $new->erpKodu = $erpKodu;

        return $new;
    }
}

