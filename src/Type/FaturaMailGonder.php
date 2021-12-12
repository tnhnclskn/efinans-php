<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FaturaMailGonder implements RequestInterface
{
    /**
     * @var string
     */
    private $vknTckn;

    /**
     * @var string
     */
    private $inOut;

    /**
     * @var string
     */
    private $UUID;

    /**
     * @var string
     */
    private $faturaNo;

    /**
     * @var string
     */
    private $alicilar;

    /**
     * @var string
     */
    private $belgeFormati;

    /**
     * Constructor
     *
     * @var string $vknTckn
     * @var string $inOut
     * @var string $UUID
     * @var string $faturaNo
     * @var string $alicilar
     * @var string $belgeFormati
     */
    public function __construct($vknTckn, $inOut, $UUID, $faturaNo, $alicilar, $belgeFormati)
    {
        $this->vknTckn = $vknTckn;
        $this->inOut = $inOut;
        $this->UUID = $UUID;
        $this->faturaNo = $faturaNo;
        $this->alicilar = $alicilar;
        $this->belgeFormati = $belgeFormati;
    }

    /**
     * @return string
     */
    public function getVknTckn()
    {
        return $this->vknTckn;
    }

    /**
     * @param string $vknTckn
     * @return FaturaMailGonder
     */
    public function withVknTckn($vknTckn)
    {
        $new = clone $this;
        $new->vknTckn = $vknTckn;

        return $new;
    }

    /**
     * @return string
     */
    public function getInOut()
    {
        return $this->inOut;
    }

    /**
     * @param string $inOut
     * @return FaturaMailGonder
     */
    public function withInOut($inOut)
    {
        $new = clone $this;
        $new->inOut = $inOut;

        return $new;
    }

    /**
     * @return string
     */
    public function getUUID()
    {
        return $this->UUID;
    }

    /**
     * @param string $UUID
     * @return FaturaMailGonder
     */
    public function withUUID($UUID)
    {
        $new = clone $this;
        $new->UUID = $UUID;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaturaNo()
    {
        return $this->faturaNo;
    }

    /**
     * @param string $faturaNo
     * @return FaturaMailGonder
     */
    public function withFaturaNo($faturaNo)
    {
        $new = clone $this;
        $new->faturaNo = $faturaNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getAlicilar()
    {
        return $this->alicilar;
    }

    /**
     * @param string $alicilar
     * @return FaturaMailGonder
     */
    public function withAlicilar($alicilar)
    {
        $new = clone $this;
        $new->alicilar = $alicilar;

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
     * @return FaturaMailGonder
     */
    public function withBelgeFormati($belgeFormati)
    {
        $new = clone $this;
        $new->belgeFormati = $belgeFormati;

        return $new;
    }
}

