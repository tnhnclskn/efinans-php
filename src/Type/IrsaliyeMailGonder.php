<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IrsaliyeMailGonder implements RequestInterface
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
    private $irsaliyeNo;

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
     * @var string $irsaliyeNo
     * @var string $alicilar
     * @var string $belgeFormati
     */
    public function __construct($vknTckn, $inOut, $UUID, $irsaliyeNo, $alicilar, $belgeFormati)
    {
        $this->vknTckn = $vknTckn;
        $this->inOut = $inOut;
        $this->UUID = $UUID;
        $this->irsaliyeNo = $irsaliyeNo;
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
     * @return IrsaliyeMailGonder
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
     * @return IrsaliyeMailGonder
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
     * @return IrsaliyeMailGonder
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
    public function getIrsaliyeNo()
    {
        return $this->irsaliyeNo;
    }

    /**
     * @param string $irsaliyeNo
     * @return IrsaliyeMailGonder
     */
    public function withIrsaliyeNo($irsaliyeNo)
    {
        $new = clone $this;
        $new->irsaliyeNo = $irsaliyeNo;

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
     * @return IrsaliyeMailGonder
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
     * @return IrsaliyeMailGonder
     */
    public function withBelgeFormati($belgeFormati)
    {
        $new = clone $this;
        $new->belgeFormati = $belgeFormati;

        return $new;
    }
}

