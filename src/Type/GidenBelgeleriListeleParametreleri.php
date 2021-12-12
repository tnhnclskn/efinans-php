<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeleriListeleParametreleri
{
    /**
     * @var string
     */
    private $baslangicBelgeTarihi;

    /**
     * @var string
     */
    private $baslangicGonderimTarihi;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var string
     */
    private $bitisBelgeTarihi;

    /**
     * @var string
     */
    private $bitisGonderimTarihi;

    /**
     * @var string
     */
    private $vkn;

    /**
     * @return string
     */
    public function getBaslangicBelgeTarihi()
    {
        return $this->baslangicBelgeTarihi;
    }

    /**
     * @param string $baslangicBelgeTarihi
     * @return GidenBelgeleriListeleParametreleri
     */
    public function withBaslangicBelgeTarihi($baslangicBelgeTarihi)
    {
        $new = clone $this;
        $new->baslangicBelgeTarihi = $baslangicBelgeTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getBaslangicGonderimTarihi()
    {
        return $this->baslangicGonderimTarihi;
    }

    /**
     * @param string $baslangicGonderimTarihi
     * @return GidenBelgeleriListeleParametreleri
     */
    public function withBaslangicGonderimTarihi($baslangicGonderimTarihi)
    {
        $new = clone $this;
        $new->baslangicGonderimTarihi = $baslangicGonderimTarihi;

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
     * @return GidenBelgeleriListeleParametreleri
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
    public function getBitisBelgeTarihi()
    {
        return $this->bitisBelgeTarihi;
    }

    /**
     * @param string $bitisBelgeTarihi
     * @return GidenBelgeleriListeleParametreleri
     */
    public function withBitisBelgeTarihi($bitisBelgeTarihi)
    {
        $new = clone $this;
        $new->bitisBelgeTarihi = $bitisBelgeTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getBitisGonderimTarihi()
    {
        return $this->bitisGonderimTarihi;
    }

    /**
     * @param string $bitisGonderimTarihi
     * @return GidenBelgeleriListeleParametreleri
     */
    public function withBitisGonderimTarihi($bitisGonderimTarihi)
    {
        $new = clone $this;
        $new->bitisGonderimTarihi = $bitisGonderimTarihi;

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
     * @return GidenBelgeleriListeleParametreleri
     */
    public function withVkn($vkn)
    {
        $new = clone $this;
        $new->vkn = $vkn;

        return $new;
    }
}

