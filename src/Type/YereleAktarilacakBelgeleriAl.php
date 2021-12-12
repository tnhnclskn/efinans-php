<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class YereleAktarilacakBelgeleriAl implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $entegrasyonHedefi;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $entegrasyonHedefi
     * @var string $belgeTuru
     */
    public function __construct($vergiTcKimlikNo, $entegrasyonHedefi, $belgeTuru)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->entegrasyonHedefi = $entegrasyonHedefi;
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
     * @return YereleAktarilacakBelgeleriAl
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
    public function getEntegrasyonHedefi()
    {
        return $this->entegrasyonHedefi;
    }

    /**
     * @param string $entegrasyonHedefi
     * @return YereleAktarilacakBelgeleriAl
     */
    public function withEntegrasyonHedefi($entegrasyonHedefi)
    {
        $new = clone $this;
        $new->entegrasyonHedefi = $entegrasyonHedefi;

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
     * @return YereleAktarilacakBelgeleriAl
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }
}

