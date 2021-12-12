<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeleriListelePortalData
{
    /**
     * @var string
     */
    private $alanEtiket;

    /**
     * @var string
     */
    private $alanSubeKodu;

    /**
     * @var string
     */
    private $alanVergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeNo;

    /**
     * @var string
     */
    private $belgeTarihi;

    /**
     * @var string
     */
    private $belgeTipi;

    /**
     * @var string
     */
    private $belgeTuru;

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
    private $gonderenEtiket;

    /**
     * @var string
     */
    private $gonderenSubeKodu;

    /**
     * @var string
     */
    private $gonderimZamani;

    /**
     * @var string
     */
    private $islemYapanVkn;

    /**
     * @var string
     */
    private $kaynak;

    /**
     * @var string
     */
    private $kullaniciKodu;

    /**
     * @return string
     */
    public function getAlanEtiket()
    {
        return $this->alanEtiket;
    }

    /**
     * @param string $alanEtiket
     * @return GidenBelgeleriListelePortalData
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
    public function getAlanSubeKodu()
    {
        return $this->alanSubeKodu;
    }

    /**
     * @param string $alanSubeKodu
     * @return GidenBelgeleriListelePortalData
     */
    public function withAlanSubeKodu($alanSubeKodu)
    {
        $new = clone $this;
        $new->alanSubeKodu = $alanSubeKodu;

        return $new;
    }

    /**
     * @return string
     */
    public function getAlanVergiTcKimlikNo()
    {
        return $this->alanVergiTcKimlikNo;
    }

    /**
     * @param string $alanVergiTcKimlikNo
     * @return GidenBelgeleriListelePortalData
     */
    public function withAlanVergiTcKimlikNo($alanVergiTcKimlikNo)
    {
        $new = clone $this;
        $new->alanVergiTcKimlikNo = $alanVergiTcKimlikNo;

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
     * @return GidenBelgeleriListelePortalData
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
    public function getBelgeTarihi()
    {
        return $this->belgeTarihi;
    }

    /**
     * @param string $belgeTarihi
     * @return GidenBelgeleriListelePortalData
     */
    public function withBelgeTarihi($belgeTarihi)
    {
        $new = clone $this;
        $new->belgeTarihi = $belgeTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeTipi()
    {
        return $this->belgeTipi;
    }

    /**
     * @param string $belgeTipi
     * @return GidenBelgeleriListelePortalData
     */
    public function withBelgeTipi($belgeTipi)
    {
        $new = clone $this;
        $new->belgeTipi = $belgeTipi;

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
     * @return GidenBelgeleriListelePortalData
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
    public function getErpKodu()
    {
        return $this->erpKodu;
    }

    /**
     * @param string $erpKodu
     * @return GidenBelgeleriListelePortalData
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
     * @return GidenBelgeleriListelePortalData
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
    public function getGonderenEtiket()
    {
        return $this->gonderenEtiket;
    }

    /**
     * @param string $gonderenEtiket
     * @return GidenBelgeleriListelePortalData
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
    public function getGonderenSubeKodu()
    {
        return $this->gonderenSubeKodu;
    }

    /**
     * @param string $gonderenSubeKodu
     * @return GidenBelgeleriListelePortalData
     */
    public function withGonderenSubeKodu($gonderenSubeKodu)
    {
        $new = clone $this;
        $new->gonderenSubeKodu = $gonderenSubeKodu;

        return $new;
    }

    /**
     * @return string
     */
    public function getGonderimZamani()
    {
        return $this->gonderimZamani;
    }

    /**
     * @param string $gonderimZamani
     * @return GidenBelgeleriListelePortalData
     */
    public function withGonderimZamani($gonderimZamani)
    {
        $new = clone $this;
        $new->gonderimZamani = $gonderimZamani;

        return $new;
    }

    /**
     * @return string
     */
    public function getIslemYapanVkn()
    {
        return $this->islemYapanVkn;
    }

    /**
     * @param string $islemYapanVkn
     * @return GidenBelgeleriListelePortalData
     */
    public function withIslemYapanVkn($islemYapanVkn)
    {
        $new = clone $this;
        $new->islemYapanVkn = $islemYapanVkn;

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
     * @return GidenBelgeleriListelePortalData
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
    public function getKullaniciKodu()
    {
        return $this->kullaniciKodu;
    }

    /**
     * @param string $kullaniciKodu
     * @return GidenBelgeleriListelePortalData
     */
    public function withKullaniciKodu($kullaniciKodu)
    {
        $new = clone $this;
        $new->kullaniciKodu = $kullaniciKodu;

        return $new;
    }
}

