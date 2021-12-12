<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GelenBelgeleriIndir implements RequestInterface
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
    private $belgeTuru;

    /**
     * @var string
     */
    private $belgeFormati;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $ettnler
     * @var string $belgeTuru
     * @var string $belgeFormati
     */
    public function __construct($vergiTcKimlikNo, $ettnler, $belgeTuru, $belgeFormati)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->ettnler = $ettnler;
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
     * @return GelenBelgeleriIndir
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
     * @return GelenBelgeleriIndir
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
    public function getBelgeTuru()
    {
        return $this->belgeTuru;
    }

    /**
     * @param string $belgeTuru
     * @return GelenBelgeleriIndir
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
     * @return GelenBelgeleriIndir
     */
    public function withBelgeFormati($belgeFormati)
    {
        $new = clone $this;
        $new->belgeFormati = $belgeFormati;

        return $new;
    }
}

