<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeleriIndirPortalParametreleri
{
    /**
     * @var string
     */
    private $baslangicGonderimTarihi;

    /**
     * @var string
     */
    private $belgeEttnListesi;

    /**
     * @var string
     */
    private $belgeFormati;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var string
     */
    private $bitisGonderimTarihi;

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
    private $kaynak;

    /**
     * @var string
     */
    private $pageCount;

    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @return string
     */
    public function getBaslangicGonderimTarihi()
    {
        return $this->baslangicGonderimTarihi;
    }

    /**
     * @param string $baslangicGonderimTarihi
     * @return GidenBelgeleriIndirPortalParametreleri
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
    public function getBelgeEttnListesi()
    {
        return $this->belgeEttnListesi;
    }

    /**
     * @param string $belgeEttnListesi
     * @return GidenBelgeleriIndirPortalParametreleri
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
    public function getBelgeFormati()
    {
        return $this->belgeFormati;
    }

    /**
     * @param string $belgeFormati
     * @return GidenBelgeleriIndirPortalParametreleri
     */
    public function withBelgeFormati($belgeFormati)
    {
        $new = clone $this;
        $new->belgeFormati = $belgeFormati;

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
     * @return GidenBelgeleriIndirPortalParametreleri
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
    public function getBitisGonderimTarihi()
    {
        return $this->bitisGonderimTarihi;
    }

    /**
     * @param string $bitisGonderimTarihi
     * @return GidenBelgeleriIndirPortalParametreleri
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
    public function getFaturaBaslangicTarihi()
    {
        return $this->faturaBaslangicTarihi;
    }

    /**
     * @param string $faturaBaslangicTarihi
     * @return GidenBelgeleriIndirPortalParametreleri
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
     * @return GidenBelgeleriIndirPortalParametreleri
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
    public function getKaynak()
    {
        return $this->kaynak;
    }

    /**
     * @param string $kaynak
     * @return GidenBelgeleriIndirPortalParametreleri
     */
    public function withKaynak($kaynak)
    {
        $new = clone $this;
        $new->kaynak = $kaynak;

        return $new;
    }

    /**
     * @return string
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param string $pageCount
     * @return GidenBelgeleriIndirPortalParametreleri
     */
    public function withPageCount($pageCount)
    {
        $new = clone $this;
        $new->pageCount = $pageCount;

        return $new;
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
     * @return GidenBelgeleriIndirPortalParametreleri
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }
}

