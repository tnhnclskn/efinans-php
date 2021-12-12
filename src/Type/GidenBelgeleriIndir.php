<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeleriIndir implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeOidListesi;

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
     * @var string $belgeOidListesi
     * @var string $belgeTuru
     * @var string $belgeFormati
     */
    public function __construct($vergiTcKimlikNo, $belgeOidListesi, $belgeTuru, $belgeFormati)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeOidListesi = $belgeOidListesi;
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
     * @return GidenBelgeleriIndir
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
    public function getBelgeOidListesi()
    {
        return $this->belgeOidListesi;
    }

    /**
     * @param string $belgeOidListesi
     * @return GidenBelgeleriIndir
     */
    public function withBelgeOidListesi($belgeOidListesi)
    {
        $new = clone $this;
        $new->belgeOidListesi = $belgeOidListesi;

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
     * @return GidenBelgeleriIndir
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
     * @return GidenBelgeleriIndir
     */
    public function withBelgeFormati($belgeFormati)
    {
        $new = clone $this;
        $new->belgeFormati = $belgeFormati;

        return $new;
    }
}

