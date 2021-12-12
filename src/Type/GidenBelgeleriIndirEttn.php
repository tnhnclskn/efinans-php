<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeleriIndirEttn implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeEttnListesi;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var string
     */
    private $belgeFormati;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $belgeEttnListesi
     * @var string $belgeTuru
     * @var string $belgeFormati
     */
    public function __construct($vergiTcKimlikNo, $belgeEttnListesi, $belgeTuru, $belgeFormati)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeEttnListesi = $belgeEttnListesi;
        $this->belgeTuru = $belgeTuru;
        $this->belgeFormati = $belgeFormati;
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
     * @return GidenBelgeleriIndirEttn
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
    public function getBelgeEttnListesi()
    {
        return $this->belgeEttnListesi;
    }

    /**
     * @param string $belgeEttnListesi
     * @return GidenBelgeleriIndirEttn
     */
    public function withBelgeEttnListesi($belgeEttnListesi)
    {
        $new = clone $this;
        $new->belgeEttnListesi = $belgeEttnListesi;

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
     * @return GidenBelgeleriIndirEttn
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
    public function getBelgeFormati()
    {
        return $this->belgeFormati;
    }

    /**
     * @param string $belgeFormati
     * @return GidenBelgeleriIndirEttn
     */
    public function withBelgeFormati($belgeFormati)
    {
        $new = clone $this;
        $new->belgeFormati = $belgeFormati;

        return $new;
    }
}

