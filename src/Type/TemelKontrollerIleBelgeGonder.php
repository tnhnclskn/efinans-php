<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TemelKontrollerIleBelgeGonder implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeNo;

    /**
     * @var string
     */
    private $veri;

    /**
     * @var string
     */
    private $belgeHash;

    /**
     * @var string
     */
    private $mimeType;

    /**
     * @var string
     */
    private $belgeVersiyon;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $belgeNo
     * @var string $veri
     * @var string $belgeHash
     * @var string $mimeType
     * @var string $belgeVersiyon
     */
    public function __construct($vergiTcKimlikNo, $belgeNo, $veri, $belgeHash, $mimeType, $belgeVersiyon)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeNo = $belgeNo;
        $this->veri = $veri;
        $this->belgeHash = $belgeHash;
        $this->mimeType = $mimeType;
        $this->belgeVersiyon = $belgeVersiyon;
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
     * @return TemelKontrollerIleBelgeGonder
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
    public function getBelgeNo()
    {
        return $this->belgeNo;
    }

    /**
     * @param string $belgeNo
     * @return TemelKontrollerIleBelgeGonder
     */
    public function withBelgeNo($belgeNo)
    {
        $new = clone $this;
        $new->belgeNo = $belgeNo;

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
     * @return TemelKontrollerIleBelgeGonder
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
    public function getBelgeHash()
    {
        return $this->belgeHash;
    }

    /**
     * @param string $belgeHash
     * @return TemelKontrollerIleBelgeGonder
     */
    public function withBelgeHash($belgeHash)
    {
        $new = clone $this;
        $new->belgeHash = $belgeHash;

        return $new;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     * @return TemelKontrollerIleBelgeGonder
     */
    public function withMimeType($mimeType)
    {
        $new = clone $this;
        $new->mimeType = $mimeType;

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
     * @return TemelKontrollerIleBelgeGonder
     */
    public function withBelgeVersiyon($belgeVersiyon)
    {
        $new = clone $this;
        $new->belgeVersiyon = $belgeVersiyon;

        return $new;
    }
}

