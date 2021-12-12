<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GelenStandartRapolariAl implements RequestInterface
{
    /**
     * @var string
     */
    private $gonderenVknTckn;

    /**
     * @var string
     */
    private $aliciVknTckn;

    /**
     * @var string
     */
    private $baslangicTarihi;

    /**
     * @var string
     */
    private $bitisTarihi;

    /**
     * @var string
     */
    private $gonderimBaslangicTarihi;

    /**
     * @var string
     */
    private $gonderimBitisTarihi;

    /**
     * Constructor
     *
     * @var string $gonderenVknTckn
     * @var string $aliciVknTckn
     * @var string $baslangicTarihi
     * @var string $bitisTarihi
     * @var string $gonderimBaslangicTarihi
     * @var string $gonderimBitisTarihi
     */
    public function __construct($gonderenVknTckn, $aliciVknTckn, $baslangicTarihi, $bitisTarihi, $gonderimBaslangicTarihi, $gonderimBitisTarihi)
    {
        $this->gonderenVknTckn = $gonderenVknTckn;
        $this->aliciVknTckn = $aliciVknTckn;
        $this->baslangicTarihi = $baslangicTarihi;
        $this->bitisTarihi = $bitisTarihi;
        $this->gonderimBaslangicTarihi = $gonderimBaslangicTarihi;
        $this->gonderimBitisTarihi = $gonderimBitisTarihi;
    }

    /**
     * @return string
     */
    public function getGonderenVknTckn()
    {
        return $this->gonderenVknTckn;
    }

    /**
     * @param string $gonderenVknTckn
     * @return GelenStandartRapolariAl
     */
    public function withGonderenVknTckn($gonderenVknTckn)
    {
        $new = clone $this;
        $new->gonderenVknTckn = $gonderenVknTckn;

        return $new;
    }

    /**
     * @return string
     */
    public function getAliciVknTckn()
    {
        return $this->aliciVknTckn;
    }

    /**
     * @param string $aliciVknTckn
     * @return GelenStandartRapolariAl
     */
    public function withAliciVknTckn($aliciVknTckn)
    {
        $new = clone $this;
        $new->aliciVknTckn = $aliciVknTckn;

        return $new;
    }

    /**
     * @return string
     */
    public function getBaslangicTarihi()
    {
        return $this->baslangicTarihi;
    }

    /**
     * @param string $baslangicTarihi
     * @return GelenStandartRapolariAl
     */
    public function withBaslangicTarihi($baslangicTarihi)
    {
        $new = clone $this;
        $new->baslangicTarihi = $baslangicTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getBitisTarihi()
    {
        return $this->bitisTarihi;
    }

    /**
     * @param string $bitisTarihi
     * @return GelenStandartRapolariAl
     */
    public function withBitisTarihi($bitisTarihi)
    {
        $new = clone $this;
        $new->bitisTarihi = $bitisTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getGonderimBaslangicTarihi()
    {
        return $this->gonderimBaslangicTarihi;
    }

    /**
     * @param string $gonderimBaslangicTarihi
     * @return GelenStandartRapolariAl
     */
    public function withGonderimBaslangicTarihi($gonderimBaslangicTarihi)
    {
        $new = clone $this;
        $new->gonderimBaslangicTarihi = $gonderimBaslangicTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getGonderimBitisTarihi()
    {
        return $this->gonderimBitisTarihi;
    }

    /**
     * @param string $gonderimBitisTarihi
     * @return GelenStandartRapolariAl
     */
    public function withGonderimBitisTarihi($gonderimBitisTarihi)
    {
        $new = clone $this;
        $new->gonderimBitisTarihi = $gonderimBitisTarihi;

        return $new;
    }
}

