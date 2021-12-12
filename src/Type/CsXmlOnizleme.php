<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CsXmlOnizleme implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeVersiyon;

    /**
     * @var string
     */
    private $veri;

    /**
     * @var string
     */
    private $belgeFormati;

    /**
     * @var string
     */
    private $xsltAdi;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $belgeVersiyon
     * @var string $veri
     * @var string $belgeFormati
     * @var string $xsltAdi
     * @var string $belgeTuru
     */
    public function __construct($vergiTcKimlikNo, $belgeVersiyon, $veri, $belgeFormati, $xsltAdi, $belgeTuru)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeVersiyon = $belgeVersiyon;
        $this->veri = $veri;
        $this->belgeFormati = $belgeFormati;
        $this->xsltAdi = $xsltAdi;
        $this->belgeTuru = $belgeTuru;
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
     * @return CsXmlOnizleme
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
    public function getBelgeVersiyon()
    {
        return $this->belgeVersiyon;
    }

    /**
     * @param string $belgeVersiyon
     * @return CsXmlOnizleme
     */
    public function withBelgeVersiyon($belgeVersiyon)
    {
        $new = clone $this;
        $new->belgeVersiyon = $belgeVersiyon;

        return $new;
    }

    /**
     * @return string
     */
    public function getVeri()
    {
        return $this->veri;
    }

    /**
     * @param string $veri
     * @return CsXmlOnizleme
     */
    public function withVeri($veri)
    {
        $new = clone $this;
        $new->veri = $veri;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeFormati()
    {
        return $this->belgeFormati;
    }

    /**
     * @param string $belgeFormati
     * @return CsXmlOnizleme
     */
    public function withBelgeFormati($belgeFormati)
    {
        $new = clone $this;
        $new->belgeFormati = $belgeFormati;

        return $new;
    }

    /**
     * @return string
     */
    public function getXsltAdi()
    {
        return $this->xsltAdi;
    }

    /**
     * @param string $xsltAdi
     * @return CsXmlOnizleme
     */
    public function withXsltAdi($xsltAdi)
    {
        $new = clone $this;
        $new->xsltAdi = $xsltAdi;

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
     * @return CsXmlOnizleme
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }
}

