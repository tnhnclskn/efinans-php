<?php

namespace Tnhnclskn\Efinans\Type;

class FaturaTarihcesiData
{
    /**
     * @var string
     */
    private $bagliKayitId;

    /**
     * @var string
     */
    private $faturaEttn;

    /**
     * @var int
     */
    private $islem;

    /**
     * @var string
     */
    private $islemAciklama;

    /**
     * @var int
     */
    private $islemKanali;

    /**
     * @var string
     */
    private $islemKanaliAciklama;

    /**
     * @var string
     */
    private $islemSonucu;

    /**
     * @var string
     */
    private $islemZamani;

    /**
     * @var string
     */
    private $kullanici;

    /**
     * @var string
     */
    private $kullaniciIp;

    /**
     * @var string
     */
    private $zarfEttn;

    /**
     * @return string
     */
    public function getBagliKayitId()
    {
        return $this->bagliKayitId;
    }

    /**
     * @param string $bagliKayitId
     * @return FaturaTarihcesiData
     */
    public function withBagliKayitId($bagliKayitId)
    {
        $new = clone $this;
        $new->bagliKayitId = $bagliKayitId;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaturaEttn()
    {
        return $this->faturaEttn;
    }

    /**
     * @param string $faturaEttn
     * @return FaturaTarihcesiData
     */
    public function withFaturaEttn($faturaEttn)
    {
        $new = clone $this;
        $new->faturaEttn = $faturaEttn;

        return $new;
    }

    /**
     * @return int
     */
    public function getIslem()
    {
        return $this->islem;
    }

    /**
     * @param int $islem
     * @return FaturaTarihcesiData
     */
    public function withIslem($islem)
    {
        $new = clone $this;
        $new->islem = $islem;

        return $new;
    }

    /**
     * @return string
     */
    public function getIslemAciklama()
    {
        return $this->islemAciklama;
    }

    /**
     * @param string $islemAciklama
     * @return FaturaTarihcesiData
     */
    public function withIslemAciklama($islemAciklama)
    {
        $new = clone $this;
        $new->islemAciklama = $islemAciklama;

        return $new;
    }

    /**
     * @return int
     */
    public function getIslemKanali()
    {
        return $this->islemKanali;
    }

    /**
     * @param int $islemKanali
     * @return FaturaTarihcesiData
     */
    public function withIslemKanali($islemKanali)
    {
        $new = clone $this;
        $new->islemKanali = $islemKanali;

        return $new;
    }

    /**
     * @return string
     */
    public function getIslemKanaliAciklama()
    {
        return $this->islemKanaliAciklama;
    }

    /**
     * @param string $islemKanaliAciklama
     * @return FaturaTarihcesiData
     */
    public function withIslemKanaliAciklama($islemKanaliAciklama)
    {
        $new = clone $this;
        $new->islemKanaliAciklama = $islemKanaliAciklama;

        return $new;
    }

    /**
     * @return string
     */
    public function getIslemSonucu()
    {
        return $this->islemSonucu;
    }

    /**
     * @param string $islemSonucu
     * @return FaturaTarihcesiData
     */
    public function withIslemSonucu($islemSonucu)
    {
        $new = clone $this;
        $new->islemSonucu = $islemSonucu;

        return $new;
    }

    /**
     * @return string
     */
    public function getIslemZamani()
    {
        return $this->islemZamani;
    }

    /**
     * @param string $islemZamani
     * @return FaturaTarihcesiData
     */
    public function withIslemZamani($islemZamani)
    {
        $new = clone $this;
        $new->islemZamani = $islemZamani;

        return $new;
    }

    /**
     * @return string
     */
    public function getKullanici()
    {
        return $this->kullanici;
    }

    /**
     * @param string $kullanici
     * @return FaturaTarihcesiData
     */
    public function withKullanici($kullanici)
    {
        $new = clone $this;
        $new->kullanici = $kullanici;

        return $new;
    }

    /**
     * @return string
     */
    public function getKullaniciIp()
    {
        return $this->kullaniciIp;
    }

    /**
     * @param string $kullaniciIp
     * @return FaturaTarihcesiData
     */
    public function withKullaniciIp($kullaniciIp)
    {
        $new = clone $this;
        $new->kullaniciIp = $kullaniciIp;

        return $new;
    }

    /**
     * @return string
     */
    public function getZarfEttn()
    {
        return $this->zarfEttn;
    }

    /**
     * @param string $zarfEttn
     * @return FaturaTarihcesiData
     */
    public function withZarfEttn($zarfEttn)
    {
        $new = clone $this;
        $new->zarfEttn = $zarfEttn;

        return $new;
    }
}

