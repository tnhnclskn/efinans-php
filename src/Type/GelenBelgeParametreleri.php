<?php

namespace Tnhnclskn\Efinans\Type;

class GelenBelgeParametreleri
{
    /**
     * @var string
     */
    private $alanEtiket;

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
    private $belgeVersiyon;

    /**
     * @var bool
     */
    private $belgelerAlindiMi;

    /**
     * @var string
     */
    private $donusTipiVersiyon;

    /**
     * @var string
     */
    private $entegrasyonHedefi;

    /**
     * @var string
     */
    private $erpKodu;

    /**
     * @var string
     */
    private $ettn;

    /**
     * @var string
     */
    private $faturaTarihiBaslangic;

    /**
     * @var string
     */
    private $faturaTarihiBitis;

    /**
     * @var string
     */
    private $gelisTarihiBaslangic;

    /**
     * @var string
     */
    private $gelisTarihiBitis;

    /**
     * @var string
     */
    private $gonderenEtiket;

    /**
     * @var string
     */
    private $onayDurum;

    /**
     * @var string
     */
    private $sonAlinanBelgeSiraNumarasi;

    /**
     * @var string
     */
    private $subeKodu;

    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @return string
     */
    public function getAlanEtiket()
    {
        return $this->alanEtiket;
    }

    /**
     * @param string $alanEtiket
     * @return GelenBelgeParametreleri
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
    public function getBelgeFormati()
    {
        return $this->belgeFormati;
    }

    /**
     * @param string $belgeFormati
     * @return GelenBelgeParametreleri
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
     * @return GelenBelgeParametreleri
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
     * @return GelenBelgeParametreleri
     */
    public function withBelgeVersiyon($belgeVersiyon)
    {
        $new = clone $this;
        $new->belgeVersiyon = $belgeVersiyon;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBelgelerAlindiMi()
    {
        return $this->belgelerAlindiMi;
    }

    /**
     * @param bool $belgelerAlindiMi
     * @return GelenBelgeParametreleri
     */
    public function withBelgelerAlindiMi($belgelerAlindiMi)
    {
        $new = clone $this;
        $new->belgelerAlindiMi = $belgelerAlindiMi;

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
     * @return GelenBelgeParametreleri
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
    public function getEntegrasyonHedefi()
    {
        return $this->entegrasyonHedefi;
    }

    /**
     * @param string $entegrasyonHedefi
     * @return GelenBelgeParametreleri
     */
    public function withEntegrasyonHedefi($entegrasyonHedefi)
    {
        $new = clone $this;
        $new->entegrasyonHedefi = $entegrasyonHedefi;

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
     * @return GelenBelgeParametreleri
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
    public function getEttn()
    {
        return $this->ettn;
    }

    /**
     * @param string $ettn
     * @return GelenBelgeParametreleri
     */
    public function withEttn($ettn)
    {
        $new = clone $this;
        $new->ettn = $ettn;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaturaTarihiBaslangic()
    {
        return $this->faturaTarihiBaslangic;
    }

    /**
     * @param string $faturaTarihiBaslangic
     * @return GelenBelgeParametreleri
     */
    public function withFaturaTarihiBaslangic($faturaTarihiBaslangic)
    {
        $new = clone $this;
        $new->faturaTarihiBaslangic = $faturaTarihiBaslangic;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaturaTarihiBitis()
    {
        return $this->faturaTarihiBitis;
    }

    /**
     * @param string $faturaTarihiBitis
     * @return GelenBelgeParametreleri
     */
    public function withFaturaTarihiBitis($faturaTarihiBitis)
    {
        $new = clone $this;
        $new->faturaTarihiBitis = $faturaTarihiBitis;

        return $new;
    }

    /**
     * @return string
     */
    public function getGelisTarihiBaslangic()
    {
        return $this->gelisTarihiBaslangic;
    }

    /**
     * @param string $gelisTarihiBaslangic
     * @return GelenBelgeParametreleri
     */
    public function withGelisTarihiBaslangic($gelisTarihiBaslangic)
    {
        $new = clone $this;
        $new->gelisTarihiBaslangic = $gelisTarihiBaslangic;

        return $new;
    }

    /**
     * @return string
     */
    public function getGelisTarihiBitis()
    {
        return $this->gelisTarihiBitis;
    }

    /**
     * @param string $gelisTarihiBitis
     * @return GelenBelgeParametreleri
     */
    public function withGelisTarihiBitis($gelisTarihiBitis)
    {
        $new = clone $this;
        $new->gelisTarihiBitis = $gelisTarihiBitis;

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
     * @return GelenBelgeParametreleri
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
    public function getOnayDurum()
    {
        return $this->onayDurum;
    }

    /**
     * @param string $onayDurum
     * @return GelenBelgeParametreleri
     */
    public function withOnayDurum($onayDurum)
    {
        $new = clone $this;
        $new->onayDurum = $onayDurum;

        return $new;
    }

    /**
     * @return string
     */
    public function getSonAlinanBelgeSiraNumarasi()
    {
        return $this->sonAlinanBelgeSiraNumarasi;
    }

    /**
     * @param string $sonAlinanBelgeSiraNumarasi
     * @return GelenBelgeParametreleri
     */
    public function withSonAlinanBelgeSiraNumarasi($sonAlinanBelgeSiraNumarasi)
    {
        $new = clone $this;
        $new->sonAlinanBelgeSiraNumarasi = $sonAlinanBelgeSiraNumarasi;

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
     * @return GelenBelgeParametreleri
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
     * @return GelenBelgeParametreleri
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }
}

