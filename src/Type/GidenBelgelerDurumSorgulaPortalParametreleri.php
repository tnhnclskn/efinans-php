<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgelerDurumSorgulaPortalParametreleri
{
    /**
     * @var string
     */
    private $baslangicOlusturulmaTarihi;

    /**
     * @var string
     */
    private $belgeEttnListesi;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var string
     */
    private $belgeVersiyon;

    /**
     * @var string
     */
    private $bitisOlusturulmaTarihi;

    /**
     * @var string
     */
    private $faturaBaslangicTarihi;

    /**
     * @var string
     */
    private $faturaBitisTarihi;

    /**
     * @var string
     */
    private $vknTckn;

    /**
     * @return string
     */
    public function getBaslangicOlusturulmaTarihi()
    {
        return $this->baslangicOlusturulmaTarihi;
    }

    /**
     * @param string $baslangicOlusturulmaTarihi
     * @return GidenBelgelerDurumSorgulaPortalParametreleri
     */
    public function withBaslangicOlusturulmaTarihi($baslangicOlusturulmaTarihi)
    {
        $new = clone $this;
        $new->baslangicOlusturulmaTarihi = $baslangicOlusturulmaTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeEttnListesi()
    {
        return $this->belgeEttnListesi;
    }

    /**
     * @param string $belgeEttnListesi
     * @return GidenBelgelerDurumSorgulaPortalParametreleri
     */
    public function withBelgeEttnListesi($belgeEttnListesi)
    {
        $new = clone $this;
        $new->belgeEttnListesi = $belgeEttnListesi;

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
     * @return GidenBelgelerDurumSorgulaPortalParametreleri
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
    public function getBelgeVersiyon()
    {
        return $this->belgeVersiyon;
    }

    /**
     * @param string $belgeVersiyon
     * @return GidenBelgelerDurumSorgulaPortalParametreleri
     */
    public function withBelgeVersiyon($belgeVersiyon)
    {
        $new = clone $this;
        $new->belgeVersiyon = $belgeVersiyon;

        return $new;
    }

    /**
     * @return string
     */
    public function getBitisOlusturulmaTarihi()
    {
        return $this->bitisOlusturulmaTarihi;
    }

    /**
     * @param string $bitisOlusturulmaTarihi
     * @return GidenBelgelerDurumSorgulaPortalParametreleri
     */
    public function withBitisOlusturulmaTarihi($bitisOlusturulmaTarihi)
    {
        $new = clone $this;
        $new->bitisOlusturulmaTarihi = $bitisOlusturulmaTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaturaBaslangicTarihi()
    {
        return $this->faturaBaslangicTarihi;
    }

    /**
     * @param string $faturaBaslangicTarihi
     * @return GidenBelgelerDurumSorgulaPortalParametreleri
     */
    public function withFaturaBaslangicTarihi($faturaBaslangicTarihi)
    {
        $new = clone $this;
        $new->faturaBaslangicTarihi = $faturaBaslangicTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaturaBitisTarihi()
    {
        return $this->faturaBitisTarihi;
    }

    /**
     * @param string $faturaBitisTarihi
     * @return GidenBelgelerDurumSorgulaPortalParametreleri
     */
    public function withFaturaBitisTarihi($faturaBitisTarihi)
    {
        $new = clone $this;
        $new->faturaBitisTarihi = $faturaBitisTarihi;

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
     * @return GidenBelgelerDurumSorgulaPortalParametreleri
     */
    public function withVknTckn($vknTckn)
    {
        $new = clone $this;
        $new->vknTckn = $vknTckn;

        return $new;
    }
}

