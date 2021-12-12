<?php

namespace Tnhnclskn\Efinans\Type;

class KalanKontorBilgisi
{
    /**
     * @var float
     */
    private $kalan;

    /**
     * @var string
     */
    private $kontorBirimi;

    /**
     * @var string
     */
    private $kontorTipi;

    /**
     * @var float
     */
    private $limitAsimMiktari;

    /**
     * @var float
     */
    private $toplamAlinan;

    /**
     * @var string
     */
    private $vknTckn;

    /**
     * @return float
     */
    public function getKalan()
    {
        return $this->kalan;
    }

    /**
     * @param float $kalan
     * @return KalanKontorBilgisi
     */
    public function withKalan($kalan)
    {
        $new = clone $this;
        $new->kalan = $kalan;

        return $new;
    }

    /**
     * @return string
     */
    public function getKontorBirimi()
    {
        return $this->kontorBirimi;
    }

    /**
     * @param string $kontorBirimi
     * @return KalanKontorBilgisi
     */
    public function withKontorBirimi($kontorBirimi)
    {
        $new = clone $this;
        $new->kontorBirimi = $kontorBirimi;

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
     * @return KalanKontorBilgisi
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
    public function getLimitAsimMiktari()
    {
        return $this->limitAsimMiktari;
    }

    /**
     * @param float $limitAsimMiktari
     * @return KalanKontorBilgisi
     */
    public function withLimitAsimMiktari($limitAsimMiktari)
    {
        $new = clone $this;
        $new->limitAsimMiktari = $limitAsimMiktari;

        return $new;
    }

    /**
     * @return float
     */
    public function getToplamAlinan()
    {
        return $this->toplamAlinan;
    }

    /**
     * @param float $toplamAlinan
     * @return KalanKontorBilgisi
     */
    public function withToplamAlinan($toplamAlinan)
    {
        $new = clone $this;
        $new->toplamAlinan = $toplamAlinan;

        return $new;
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
     * @return KalanKontorBilgisi
     */
    public function withVknTckn($vknTckn)
    {
        $new = clone $this;
        $new->vknTckn = $vknTckn;

        return $new;
    }
}

