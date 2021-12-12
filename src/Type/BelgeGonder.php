<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BelgeGonder implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeTuru;

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
     * @var string $belgeTuru
     * @var string $belgeNo
     * @var string $veri
     * @var string $belgeHash
     * @var string $mimeType
     * @var string $belgeVersiyon
     */
    public function __construct($vergiTcKimlikNo, $belgeTuru, $belgeNo, $veri, $belgeHash, $mimeType, $belgeVersiyon)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeTuru = $belgeTuru;
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
     * @return BelgeGonder
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
    public function getBelgeTuru()
    {
        return $this->belgeTuru;
    }

    /**
     * @param string $belgeTuru
     * @return BelgeGonder
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
    public function getBelgeNo()
    {
        return $this->belgeNo;
    }

    /**
     * @param string $belgeNo
     * @return BelgeGonder
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
     * @return BelgeGonder
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
     * @return BelgeGonder
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
     * @return BelgeGonder
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
     * @return BelgeGonder
     */
    public function withBelgeVersiyon($belgeVersiyon)
    {
        $new = clone $this;
        $new->belgeVersiyon = $belgeVersiyon;

        return $new;
    }
}

