<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeleriListeleData
{
    /**
     * @var string
     */
    private $alimDurumu;

    /**
     * @var string
     */
    private $alimZamani;

    /**
     * @var string
     */
    private $belgeOid;

    /**
     * @var string
     */
    private $belgeTarihi;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var string
     */
    private $ettn;

    /**
     * @var string
     */
    private $hataMesaji;

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
     * @var string
     */
    private $yerelBelgeNo;

    /**
     * @return string
     */
    public function getAlimDurumu()
    {
        return $this->alimDurumu;
    }

    /**
     * @param string $alimDurumu
     * @return GidenBelgeleriListeleData
     */
    public function withAlimDurumu($alimDurumu)
    {
        $new = clone $this;
        $new->alimDurumu = $alimDurumu;

        return $new;
    }

    /**
     * @return string
     */
    public function getAlimZamani()
    {
        return $this->alimZamani;
    }

    /**
     * @param string $alimZamani
     * @return GidenBelgeleriListeleData
     */
    public function withAlimZamani($alimZamani)
    {
        $new = clone $this;
        $new->alimZamani = $alimZamani;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeOid()
    {
        return $this->belgeOid;
    }

    /**
     * @param string $belgeOid
     * @return GidenBelgeleriListeleData
     */
    public function withBelgeOid($belgeOid)
    {
        $new = clone $this;
        $new->belgeOid = $belgeOid;

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
     * @return GidenBelgeleriListeleData
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
    public function getBelgeTuru()
    {
        return $this->belgeTuru;
    }

    /**
     * @param string $belgeTuru
     * @return GidenBelgeleriListeleData
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
    public function getEttn()
    {
        return $this->ettn;
    }

    /**
     * @param string $ettn
     * @return GidenBelgeleriListeleData
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
    public function getHataMesaji()
    {
        return $this->hataMesaji;
    }

    /**
     * @param string $hataMesaji
     * @return GidenBelgeleriListeleData
     */
    public function withHataMesaji($hataMesaji)
    {
        $new = clone $this;
        $new->hataMesaji = $hataMesaji;

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
     * @return GidenBelgeleriListeleData
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
     * @return GidenBelgeleriListeleData
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
     * @return GidenBelgeleriListeleData
     */
    public function withKullaniciKodu($kullaniciKodu)
    {
        $new = clone $this;
        $new->kullaniciKodu = $kullaniciKodu;

        return $new;
    }

    /**
     * @return string
     */
    public function getYerelBelgeNo()
    {
        return $this->yerelBelgeNo;
    }

    /**
     * @param string $yerelBelgeNo
     * @return GidenBelgeleriListeleData
     */
    public function withYerelBelgeNo($yerelBelgeNo)
    {
        $new = clone $this;
        $new->yerelBelgeNo = $yerelBelgeNo;

        return $new;
    }
}

