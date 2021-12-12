<?php

namespace Tnhnclskn\Efinans\Type;

class KontorAzaltResp
{
    /**
     * @var int
     */
    private $kanalTipi;

    /**
     * @var bool
     */
    private $kontorAzaldi;

    /**
     * @var string
     */
    private $kontorTipi;

    /**
     * @var float
     */
    private $miktar;

    /**
     * @var int
     */
    private $odemeTipi;

    /**
     * @var int
     */
    private $paketTipi;

    /**
     * @var string
     */
    private $vkn;

    /**
     * @return int
     */
    public function getKanalTipi()
    {
        return $this->kanalTipi;
    }

    /**
     * @param int $kanalTipi
     * @return KontorAzaltResp
     */
    public function withKanalTipi($kanalTipi)
    {
        $new = clone $this;
        $new->kanalTipi = $kanalTipi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getKontorAzaldi()
    {
        return $this->kontorAzaldi;
    }

    /**
     * @param bool $kontorAzaldi
     * @return KontorAzaltResp
     */
    public function withKontorAzaldi($kontorAzaldi)
    {
        $new = clone $this;
        $new->kontorAzaldi = $kontorAzaldi;

        return $new;
    }

    /**
     * @return string
     */
    public function getKontorTipi()
    {
        return $this->kontorTipi;
    }

    /**
     * @param string $kontorTipi
     * @return KontorAzaltResp
     */
    public function withKontorTipi($kontorTipi)
    {
        $new = clone $this;
        $new->kontorTipi = $kontorTipi;

        return $new;
    }

    /**
     * @return float
     */
    public function getMiktar()
    {
        return $this->miktar;
    }

    /**
     * @param float $miktar
     * @return KontorAzaltResp
     */
    public function withMiktar($miktar)
    {
        $new = clone $this;
        $new->miktar = $miktar;

        return $new;
    }

    /**
     * @return int
     */
    public function getOdemeTipi()
    {
        return $this->odemeTipi;
    }

    /**
     * @param int $odemeTipi
     * @return KontorAzaltResp
     */
    public function withOdemeTipi($odemeTipi)
    {
        $new = clone $this;
        $new->odemeTipi = $odemeTipi;

        return $new;
    }

    /**
     * @return int
     */
    public function getPaketTipi()
    {
        return $this->paketTipi;
    }

    /**
     * @param int $paketTipi
     * @return KontorAzaltResp
     */
    public function withPaketTipi($paketTipi)
    {
        $new = clone $this;
        $new->paketTipi = $paketTipi;

        return $new;
    }

    /**
     * @return string
     */
    public function getVkn()
    {
        return $this->vkn;
    }

    /**
     * @param string $vkn
     * @return KontorAzaltResp
     */
    public function withVkn($vkn)
    {
        $new = clone $this;
        $new->vkn = $vkn;

        return $new;
    }
}

