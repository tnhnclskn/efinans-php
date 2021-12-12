<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeParametreleri
{
    /**
     * @var string
     */
    private $alanEtiket;

    /**
     * @var string
     */
    private $belgeHash;

    /**
     * @var string
     */
    private $belgeNo;

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
    private $donusTipiVersiyon;

    /**
     * @var string
     */
    private $erpKodu;

    /**
     * @var string
     */
    private $gonderenEtiket;

    /**
     * @var string
     */
    private $mimeType;

    /**
     * @var string
     */
    private $subeKodu;

    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $veri;

    /**
     * @var string
     */
    private $xsltAdi;

    /**
     * @var string
     */
    private $xsltVeri;

    /**
     * @return string
     */
    public function getAlanEtiket()
    {
        return $this->alanEtiket;
    }

    /**
     * @param string $alanEtiket
     * @return GidenBelgeParametreleri
     */
    public function withAlanEtiket($alanEtiket)
    {
        $new = clone $this;
        $new->alanEtiket = $alanEtiket;

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
     * @return GidenBelgeParametreleri
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
    public function getBelgeNo()
    {
        return $this->belgeNo;
    }

    /**
     * @param string $belgeNo
     * @return GidenBelgeParametreleri
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
    public function getBelgeTuru()
    {
        return $this->belgeTuru;
    }

    /**
     * @param string $belgeTuru
     * @return GidenBelgeParametreleri
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
     * @return GidenBelgeParametreleri
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
    public function getDonusTipiVersiyon()
    {
        return $this->donusTipiVersiyon;
    }

    /**
     * @param string $donusTipiVersiyon
     * @return GidenBelgeParametreleri
     */
    public function withDonusTipiVersiyon($donusTipiVersiyon)
    {
        $new = clone $this;
        $new->donusTipiVersiyon = $donusTipiVersiyon;

        return $new;
    }

    /**
     * @return string
     */
    public function getErpKodu()
    {
        return $this->erpKodu;
    }

    /**
     * @param string $erpKodu
     * @return GidenBelgeParametreleri
     */
    public function withErpKodu($erpKodu)
    {
        $new = clone $this;
        $new->erpKodu = $erpKodu;

        return $new;
    }

    /**
     * @return string
     */
    public function getGonderenEtiket()
    {
        return $this->gonderenEtiket;
    }

    /**
     * @param string $gonderenEtiket
     * @return GidenBelgeParametreleri
     */
    public function withGonderenEtiket($gonderenEtiket)
    {
        $new = clone $this;
        $new->gonderenEtiket = $gonderenEtiket;

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
     * @return GidenBelgeParametreleri
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
    public function getSubeKodu()
    {
        return $this->subeKodu;
    }

    /**
     * @param string $subeKodu
     * @return GidenBelgeParametreleri
     */
    public function withSubeKodu($subeKodu)
    {
        $new = clone $this;
        $new->subeKodu = $subeKodu;

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
     * @return GidenBelgeParametreleri
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
    public function getVeri()
    {
        return $this->veri;
    }

    /**
     * @param string $veri
     * @return GidenBelgeParametreleri
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
    public function getXsltAdi()
    {
        return $this->xsltAdi;
    }

    /**
     * @param string $xsltAdi
     * @return GidenBelgeParametreleri
     */
    public function withXsltAdi($xsltAdi)
    {
        $new = clone $this;
        $new->xsltAdi = $xsltAdi;

        return $new;
    }

    /**
     * @return string
     */
    public function getXsltVeri()
    {
        return $this->xsltVeri;
    }

    /**
     * @param string $xsltVeri
     * @return GidenBelgeParametreleri
     */
    public function withXsltVeri($xsltVeri)
    {
        $new = clone $this;
        $new->xsltVeri = $xsltVeri;

        return $new;
    }
}

