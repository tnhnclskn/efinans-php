<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CsXmlToUbl implements RequestInterface
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
     * @var string $xsltAdi
     * @var string $belgeTuru
     */
    public function __construct($vergiTcKimlikNo, $belgeVersiyon, $veri, $xsltAdi, $belgeTuru)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeVersiyon = $belgeVersiyon;
        $this->veri = $veri;
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
     * @return CsXmlToUbl
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
     * @return CsXmlToUbl
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
     * @return CsXmlToUbl
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
    public function getXsltAdi()
    {
        return $this->xsltAdi;
    }

    /**
     * @param string $xsltAdi
     * @return CsXmlToUbl
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
     * @return CsXmlToUbl
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }
}

