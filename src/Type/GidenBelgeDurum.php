<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeDurum
{
    /**
     * @var string
     */
    private $aciklama;

    /**
     * @var string
     */
    private $alimTarihi;

    /**
     * @var string
     */
    private $belgeNo;

    /**
     * @var int
     */
    private $durum;

    /**
     * @var string
     */
    private $ettn;

    /**
     * @var string
     */
    private $gonderimCevabiDetayi;

    /**
     * @var int
     */
    private $gonderimCevabiKodu;

    /**
     * @var int
     */
    private $gonderimDurumu;

    /**
     * @var string
     */
    private $gonderimTarihi;

    /**
     * @var string
     */
    private $olusturulmaTarihi;

    /**
     * @var string
     */
    private $yanitDetayi;

    /**
     * @var int
     */
    private $yanitDurumu;

    /**
     * @var string
     */
    private $yanitTarihi;

    /**
     * @return string
     */
    public function getAciklama()
    {
        return $this->aciklama;
    }

    /**
     * @param string $aciklama
     * @return GidenBelgeDurum
     */
    public function withAciklama($aciklama)
    {
        $new = clone $this;
        $new->aciklama = $aciklama;

        return $new;
    }

    /**
     * @return string
     */
    public function getAlimTarihi()
    {
        return $this->alimTarihi;
    }

    /**
     * @param string $alimTarihi
     * @return GidenBelgeDurum
     */
    public function withAlimTarihi($alimTarihi)
    {
        $new = clone $this;
        $new->alimTarihi = $alimTarihi;

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
     * @return GidenBelgeDurum
     */
    public function withBelgeNo($belgeNo)
    {
        $new = clone $this;
        $new->belgeNo = $belgeNo;

        return $new;
    }

    /**
     * @return int
     */
    public function getDurum()
    {
        return $this->durum;
    }

    /**
     * @param int $durum
     * @return GidenBelgeDurum
     */
    public function withDurum($durum)
    {
        $new = clone $this;
        $new->durum = $durum;

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
     * @return GidenBelgeDurum
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
    public function getGonderimCevabiDetayi()
    {
        return $this->gonderimCevabiDetayi;
    }

    /**
     * @param string $gonderimCevabiDetayi
     * @return GidenBelgeDurum
     */
    public function withGonderimCevabiDetayi($gonderimCevabiDetayi)
    {
        $new = clone $this;
        $new->gonderimCevabiDetayi = $gonderimCevabiDetayi;

        return $new;
    }

    /**
     * @return int
     */
    public function getGonderimCevabiKodu()
    {
        return $this->gonderimCevabiKodu;
    }

    /**
     * @param int $gonderimCevabiKodu
     * @return GidenBelgeDurum
     */
    public function withGonderimCevabiKodu($gonderimCevabiKodu)
    {
        $new = clone $this;
        $new->gonderimCevabiKodu = $gonderimCevabiKodu;

        return $new;
    }

    /**
     * @return int
     */
    public function getGonderimDurumu()
    {
        return $this->gonderimDurumu;
    }

    /**
     * @param int $gonderimDurumu
     * @return GidenBelgeDurum
     */
    public function withGonderimDurumu($gonderimDurumu)
    {
        $new = clone $this;
        $new->gonderimDurumu = $gonderimDurumu;

        return $new;
    }

    /**
     * @return string
     */
    public function getGonderimTarihi()
    {
        return $this->gonderimTarihi;
    }

    /**
     * @param string $gonderimTarihi
     * @return GidenBelgeDurum
     */
    public function withGonderimTarihi($gonderimTarihi)
    {
        $new = clone $this;
        $new->gonderimTarihi = $gonderimTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getOlusturulmaTarihi()
    {
        return $this->olusturulmaTarihi;
    }

    /**
     * @param string $olusturulmaTarihi
     * @return GidenBelgeDurum
     */
    public function withOlusturulmaTarihi($olusturulmaTarihi)
    {
        $new = clone $this;
        $new->olusturulmaTarihi = $olusturulmaTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getYanitDetayi()
    {
        return $this->yanitDetayi;
    }

    /**
     * @param string $yanitDetayi
     * @return GidenBelgeDurum
     */
    public function withYanitDetayi($yanitDetayi)
    {
        $new = clone $this;
        $new->yanitDetayi = $yanitDetayi;

        return $new;
    }

    /**
     * @return int
     */
    public function getYanitDurumu()
    {
        return $this->yanitDurumu;
    }

    /**
     * @param int $yanitDurumu
     * @return GidenBelgeDurum
     */
    public function withYanitDurumu($yanitDurumu)
    {
        $new = clone $this;
        $new->yanitDurumu = $yanitDurumu;

        return $new;
    }

    /**
     * @return string
     */
    public function getYanitTarihi()
    {
        return $this->yanitTarihi;
    }

    /**
     * @param string $yanitTarihi
     * @return GidenBelgeDurum
     */
    public function withYanitTarihi($yanitTarihi)
    {
        $new = clone $this;
        $new->yanitTarihi = $yanitTarihi;

        return $new;
    }
}

