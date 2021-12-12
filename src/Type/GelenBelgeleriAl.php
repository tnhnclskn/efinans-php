<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GelenBelgeleriAl implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $sonAlinanBelgeSiraNumarasi;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $sonAlinanBelgeSiraNumarasi
     * @var string $belgeTuru
     */
    public function __construct($vergiTcKimlikNo, $sonAlinanBelgeSiraNumarasi, $belgeTuru)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->sonAlinanBelgeSiraNumarasi = $sonAlinanBelgeSiraNumarasi;
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
     * @return GelenBelgeleriAl
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
    public function getSonAlinanBelgeSiraNumarasi()
    {
        return $this->sonAlinanBelgeSiraNumarasi;
    }

    /**
     * @param string $sonAlinanBelgeSiraNumarasi
     * @return GelenBelgeleriAl
     */
    public function withSonAlinanBelgeSiraNumarasi($sonAlinanBelgeSiraNumarasi)
    {
        $new = clone $this;
        $new->sonAlinanBelgeSiraNumarasi = $sonAlinanBelgeSiraNumarasi;

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
     * @return GelenBelgeleriAl
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }
}

