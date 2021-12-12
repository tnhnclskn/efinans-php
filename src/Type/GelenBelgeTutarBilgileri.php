<?php

namespace Tnhnclskn\Efinans\Type;

class GelenBelgeTutarBilgileri
{
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
    private $ettn;

    /**
     * @var string
     */
    private $gondericiVkn;

    /**
     * @var string
     */
    private $kdv18Oran;

    /**
     * @var string
     */
    private $kdv18Tutar;

    /**
     * @var string
     */
    private $kdv1Oran;

    /**
     * @var string
     */
    private $kdv1Tutar;

    /**
     * @var string
     */
    private $kdv8Oran;

    /**
     * @var string
     */
    private $kdv8Tutar;

    /**
     * @var string
     */
    private $kdvTevkifatOran;

    /**
     * @var string
     */
    private $kdvTevkifatTutari;

    /**
     * @var string
     */
    private $kdvToplamTutari;

    /**
     * @var string
     */
    private $kdvToplamTutariDovizCinsi;

    /**
     * @var string
     */
    private $malHizmetToplamTutari;

    /**
     * @var string
     */
    private $malHizmetToplamTutariDovizCinsi;

    /**
     * @var string
     */
    private $odenecekTutar;

    /**
     * @var string
     */
    private $odenecekTutarDovizCinsi;

    /**
     * @return string
     */
    public function getBelgeNo()
    {
        return $this->belgeNo;
    }

    /**
     * @param string $belgeNo
     * @return GelenBelgeTutarBilgileri
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
     * @return GelenBelgeTutarBilgileri
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
    public function getEttn()
    {
        return $this->ettn;
    }

    /**
     * @param string $ettn
     * @return GelenBelgeTutarBilgileri
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
    public function getGondericiVkn()
    {
        return $this->gondericiVkn;
    }

    /**
     * @param string $gondericiVkn
     * @return GelenBelgeTutarBilgileri
     */
    public function withGondericiVkn($gondericiVkn)
    {
        $new = clone $this;
        $new->gondericiVkn = $gondericiVkn;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdv18Oran()
    {
        return $this->kdv18Oran;
    }

    /**
     * @param string $kdv18Oran
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdv18Oran($kdv18Oran)
    {
        $new = clone $this;
        $new->kdv18Oran = $kdv18Oran;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdv18Tutar()
    {
        return $this->kdv18Tutar;
    }

    /**
     * @param string $kdv18Tutar
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdv18Tutar($kdv18Tutar)
    {
        $new = clone $this;
        $new->kdv18Tutar = $kdv18Tutar;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdv1Oran()
    {
        return $this->kdv1Oran;
    }

    /**
     * @param string $kdv1Oran
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdv1Oran($kdv1Oran)
    {
        $new = clone $this;
        $new->kdv1Oran = $kdv1Oran;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdv1Tutar()
    {
        return $this->kdv1Tutar;
    }

    /**
     * @param string $kdv1Tutar
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdv1Tutar($kdv1Tutar)
    {
        $new = clone $this;
        $new->kdv1Tutar = $kdv1Tutar;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdv8Oran()
    {
        return $this->kdv8Oran;
    }

    /**
     * @param string $kdv8Oran
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdv8Oran($kdv8Oran)
    {
        $new = clone $this;
        $new->kdv8Oran = $kdv8Oran;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdv8Tutar()
    {
        return $this->kdv8Tutar;
    }

    /**
     * @param string $kdv8Tutar
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdv8Tutar($kdv8Tutar)
    {
        $new = clone $this;
        $new->kdv8Tutar = $kdv8Tutar;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdvTevkifatOran()
    {
        return $this->kdvTevkifatOran;
    }

    /**
     * @param string $kdvTevkifatOran
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdvTevkifatOran($kdvTevkifatOran)
    {
        $new = clone $this;
        $new->kdvTevkifatOran = $kdvTevkifatOran;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdvTevkifatTutari()
    {
        return $this->kdvTevkifatTutari;
    }

    /**
     * @param string $kdvTevkifatTutari
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdvTevkifatTutari($kdvTevkifatTutari)
    {
        $new = clone $this;
        $new->kdvTevkifatTutari = $kdvTevkifatTutari;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdvToplamTutari()
    {
        return $this->kdvToplamTutari;
    }

    /**
     * @param string $kdvToplamTutari
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdvToplamTutari($kdvToplamTutari)
    {
        $new = clone $this;
        $new->kdvToplamTutari = $kdvToplamTutari;

        return $new;
    }

    /**
     * @return string
     */
    public function getKdvToplamTutariDovizCinsi()
    {
        return $this->kdvToplamTutariDovizCinsi;
    }

    /**
     * @param string $kdvToplamTutariDovizCinsi
     * @return GelenBelgeTutarBilgileri
     */
    public function withKdvToplamTutariDovizCinsi($kdvToplamTutariDovizCinsi)
    {
        $new = clone $this;
        $new->kdvToplamTutariDovizCinsi = $kdvToplamTutariDovizCinsi;

        return $new;
    }

    /**
     * @return string
     */
    public function getMalHizmetToplamTutari()
    {
        return $this->malHizmetToplamTutari;
    }

    /**
     * @param string $malHizmetToplamTutari
     * @return GelenBelgeTutarBilgileri
     */
    public function withMalHizmetToplamTutari($malHizmetToplamTutari)
    {
        $new = clone $this;
        $new->malHizmetToplamTutari = $malHizmetToplamTutari;

        return $new;
    }

    /**
     * @return string
     */
    public function getMalHizmetToplamTutariDovizCinsi()
    {
        return $this->malHizmetToplamTutariDovizCinsi;
    }

    /**
     * @param string $malHizmetToplamTutariDovizCinsi
     * @return GelenBelgeTutarBilgileri
     */
    public function withMalHizmetToplamTutariDovizCinsi($malHizmetToplamTutariDovizCinsi)
    {
        $new = clone $this;
        $new->malHizmetToplamTutariDovizCinsi = $malHizmetToplamTutariDovizCinsi;

        return $new;
    }

    /**
     * @return string
     */
    public function getOdenecekTutar()
    {
        return $this->odenecekTutar;
    }

    /**
     * @param string $odenecekTutar
     * @return GelenBelgeTutarBilgileri
     */
    public function withOdenecekTutar($odenecekTutar)
    {
        $new = clone $this;
        $new->odenecekTutar = $odenecekTutar;

        return $new;
    }

    /**
     * @return string
     */
    public function getOdenecekTutarDovizCinsi()
    {
        return $this->odenecekTutarDovizCinsi;
    }

    /**
     * @param string $odenecekTutarDovizCinsi
     * @return GelenBelgeTutarBilgileri
     */
    public function withOdenecekTutarDovizCinsi($odenecekTutarDovizCinsi)
    {
        $new = clone $this;
        $new->odenecekTutarDovizCinsi = $odenecekTutarDovizCinsi;

        return $new;
    }
}

