<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ToplamBelgeSayisiGetir implements RequestInterface
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
    private $belgeYonu;

    /**
     * @var string
     */
    private $belgeBaslangicTarihi;

    /**
     * @var string
     */
    private $belgeBitisTarihi;

    /**
     * @var string
     */
    private $belgeBaslangicZamani;

    /**
     * @var string
     */
    private $belgeBitisZamani;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $belgeTuru
     * @var string $belgeYonu
     * @var string $belgeBaslangicTarihi
     * @var string $belgeBitisTarihi
     * @var string $belgeBaslangicZamani
     * @var string $belgeBitisZamani
     */
    public function __construct($vergiTcKimlikNo, $belgeTuru, $belgeYonu, $belgeBaslangicTarihi, $belgeBitisTarihi, $belgeBaslangicZamani, $belgeBitisZamani)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeTuru = $belgeTuru;
        $this->belgeYonu = $belgeYonu;
        $this->belgeBaslangicTarihi = $belgeBaslangicTarihi;
        $this->belgeBitisTarihi = $belgeBitisTarihi;
        $this->belgeBaslangicZamani = $belgeBaslangicZamani;
        $this->belgeBitisZamani = $belgeBitisZamani;
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
     * @return ToplamBelgeSayisiGetir
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
     * @return ToplamBelgeSayisiGetir
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
    public function getBelgeYonu()
    {
        return $this->belgeYonu;
    }

    /**
     * @param string $belgeYonu
     * @return ToplamBelgeSayisiGetir
     */
    public function withBelgeYonu($belgeYonu)
    {
        $new = clone $this;
        $new->belgeYonu = $belgeYonu;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeBaslangicTarihi()
    {
        return $this->belgeBaslangicTarihi;
    }

    /**
     * @param string $belgeBaslangicTarihi
     * @return ToplamBelgeSayisiGetir
     */
    public function withBelgeBaslangicTarihi($belgeBaslangicTarihi)
    {
        $new = clone $this;
        $new->belgeBaslangicTarihi = $belgeBaslangicTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeBitisTarihi()
    {
        return $this->belgeBitisTarihi;
    }

    /**
     * @param string $belgeBitisTarihi
     * @return ToplamBelgeSayisiGetir
     */
    public function withBelgeBitisTarihi($belgeBitisTarihi)
    {
        $new = clone $this;
        $new->belgeBitisTarihi = $belgeBitisTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeBaslangicZamani()
    {
        return $this->belgeBaslangicZamani;
    }

    /**
     * @param string $belgeBaslangicZamani
     * @return ToplamBelgeSayisiGetir
     */
    public function withBelgeBaslangicZamani($belgeBaslangicZamani)
    {
        $new = clone $this;
        $new->belgeBaslangicZamani = $belgeBaslangicZamani;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeBitisZamani()
    {
        return $this->belgeBitisZamani;
    }

    /**
     * @param string $belgeBitisZamani
     * @return ToplamBelgeSayisiGetir
     */
    public function withBelgeBitisZamani($belgeBitisZamani)
    {
        $new = clone $this;
        $new->belgeBitisZamani = $belgeBitisZamani;

        return $new;
    }
}

