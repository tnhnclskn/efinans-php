<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GelenBelgeTutarBilgileriSorgula implements RequestInterface
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
    private $baslangicGelisTarihi;

    /**
     * @var string
     */
    private $bitisGelisTarihi;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $belgeTuru
     * @var string $baslangicGelisTarihi
     * @var string $bitisGelisTarihi
     */
    public function __construct($vergiTcKimlikNo, $belgeTuru, $baslangicGelisTarihi, $bitisGelisTarihi)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeTuru = $belgeTuru;
        $this->baslangicGelisTarihi = $baslangicGelisTarihi;
        $this->bitisGelisTarihi = $bitisGelisTarihi;
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
     * @return GelenBelgeTutarBilgileriSorgula
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
     * @return GelenBelgeTutarBilgileriSorgula
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
    public function getBaslangicGelisTarihi()
    {
        return $this->baslangicGelisTarihi;
    }

    /**
     * @param string $baslangicGelisTarihi
     * @return GelenBelgeTutarBilgileriSorgula
     */
    public function withBaslangicGelisTarihi($baslangicGelisTarihi)
    {
        $new = clone $this;
        $new->baslangicGelisTarihi = $baslangicGelisTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getBitisGelisTarihi()
    {
        return $this->bitisGelisTarihi;
    }

    /**
     * @param string $bitisGelisTarihi
     * @return GelenBelgeTutarBilgileriSorgula
     */
    public function withBitisGelisTarihi($bitisGelisTarihi)
    {
        $new = clone $this;
        $new->bitisGelisTarihi = $bitisGelisTarihi;

        return $new;
    }
}

