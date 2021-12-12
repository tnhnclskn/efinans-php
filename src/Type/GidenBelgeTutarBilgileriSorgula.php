<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeTutarBilgileriSorgula implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var string
     */
    private $baslangicGonderimTarihi;

    /**
     * @var string
     */
    private $bitisGonderimTarihi;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $belgeTuru
     * @var string $baslangicGonderimTarihi
     * @var string $bitisGonderimTarihi
     */
    public function __construct($vergiTcKimlikNo, $belgeTuru, $baslangicGonderimTarihi, $bitisGonderimTarihi)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeTuru = $belgeTuru;
        $this->baslangicGonderimTarihi = $baslangicGonderimTarihi;
        $this->bitisGonderimTarihi = $bitisGonderimTarihi;
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
     * @return GidenBelgeTutarBilgileriSorgula
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
    public function getBelgeTuru()
    {
        return $this->belgeTuru;
    }

    /**
     * @param string $belgeTuru
     * @return GidenBelgeTutarBilgileriSorgula
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }

    /**
     * @return string
     */
    public function getBaslangicGonderimTarihi()
    {
        return $this->baslangicGonderimTarihi;
    }

    /**
     * @param string $baslangicGonderimTarihi
     * @return GidenBelgeTutarBilgileriSorgula
     */
    public function withBaslangicGonderimTarihi($baslangicGonderimTarihi)
    {
        $new = clone $this;
        $new->baslangicGonderimTarihi = $baslangicGonderimTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getBitisGonderimTarihi()
    {
        return $this->bitisGonderimTarihi;
    }

    /**
     * @param string $bitisGonderimTarihi
     * @return GidenBelgeTutarBilgileriSorgula
     */
    public function withBitisGonderimTarihi($bitisGonderimTarihi)
    {
        $new = clone $this;
        $new->bitisGonderimTarihi = $bitisGonderimTarihi;

        return $new;
    }
}

