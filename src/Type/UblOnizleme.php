<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UblOnizleme implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

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
    private $belgeTuru;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $veri
     * @var string $belgeFormati
     * @var string $belgeTuru
     */
    public function __construct($vergiTcKimlikNo, $veri, $belgeFormati, $belgeTuru)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->veri = $veri;
        $this->belgeFormati = $belgeFormati;
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
     * @return UblOnizleme
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
    public function getVeri()
    {
        return $this->veri;
    }

    /**
     * @param string $veri
     * @return UblOnizleme
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
     * @return UblOnizleme
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
    public function getBelgeTuru()
    {
        return $this->belgeTuru;
    }

    /**
     * @param string $belgeTuru
     * @return UblOnizleme
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }
}

