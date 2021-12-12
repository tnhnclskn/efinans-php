<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GelenTasinanBelgeleriIndir implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $ettnler;

    /**
     * @var string
     */
    private $belgeFormati;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $ettnler
     * @var string $belgeFormati
     */
    public function __construct($vergiTcKimlikNo, $ettnler, $belgeFormati)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->ettnler = $ettnler;
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
     * @return GelenTasinanBelgeleriIndir
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
    public function getEttnler()
    {
        return $this->ettnler;
    }

    /**
     * @param string $ettnler
     * @return GelenTasinanBelgeleriIndir
     */
    public function withEttnler($ettnler)
    {
        $new = clone $this;
        $new->ettnler = $ettnler;

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
     * @return GelenTasinanBelgeleriIndir
     */
    public function withBelgeFormati($belgeFormati)
    {
        $new = clone $this;
        $new->belgeFormati = $belgeFormati;

        return $new;
    }
}

