<?php

namespace Tnhnclskn\Efinans\Type;

class EFaturaKullaniciExtended
{
    /**
     * @var string
     */
    private $etiket;

    /**
     * @var string
     */
    private $etiketOlusturulmaZamani;

    /**
     * @var int
     */
    private $hesapTipi;

    /**
     * @var bool
     */
    private $kamuKurulusu;

    /**
     * @var string
     */
    private $kayitZamani;

    /**
     * @var int
     */
    private $tip;

    /**
     * @var string
     */
    private $unvan;

    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var \Tnhnclskn\Efinans\Type\EFaturaKayitliKullaniciHistory
     */
    private $eFaturaKayitliKullaniciHistoryList;

    /**
     * @return string
     */
    public function getEtiket()
    {
        return $this->etiket;
    }

    /**
     * @param string $etiket
     * @return EFaturaKullaniciExtended
     */
    public function withEtiket($etiket)
    {
        $new = clone $this;
        $new->etiket = $etiket;

        return $new;
    }

    /**
     * @return string
     */
    public function getEtiketOlusturulmaZamani()
    {
        return $this->etiketOlusturulmaZamani;
    }

    /**
     * @param string $etiketOlusturulmaZamani
     * @return EFaturaKullaniciExtended
     */
    public function withEtiketOlusturulmaZamani($etiketOlusturulmaZamani)
    {
        $new = clone $this;
        $new->etiketOlusturulmaZamani = $etiketOlusturulmaZamani;

        return $new;
    }

    /**
     * @return int
     */
    public function getHesapTipi()
    {
        return $this->hesapTipi;
    }

    /**
     * @param int $hesapTipi
     * @return EFaturaKullaniciExtended
     */
    public function withHesapTipi($hesapTipi)
    {
        $new = clone $this;
        $new->hesapTipi = $hesapTipi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getKamuKurulusu()
    {
        return $this->kamuKurulusu;
    }

    /**
     * @param bool $kamuKurulusu
     * @return EFaturaKullaniciExtended
     */
    public function withKamuKurulusu($kamuKurulusu)
    {
        $new = clone $this;
        $new->kamuKurulusu = $kamuKurulusu;

        return $new;
    }

    /**
     * @return string
     */
    public function getKayitZamani()
    {
        return $this->kayitZamani;
    }

    /**
     * @param string $kayitZamani
     * @return EFaturaKullaniciExtended
     */
    public function withKayitZamani($kayitZamani)
    {
        $new = clone $this;
        $new->kayitZamani = $kayitZamani;

        return $new;
    }

    /**
     * @return int
     */
    public function getTip()
    {
        return $this->tip;
    }

    /**
     * @param int $tip
     * @return EFaturaKullaniciExtended
     */
    public function withTip($tip)
    {
        $new = clone $this;
        $new->tip = $tip;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnvan()
    {
        return $this->unvan;
    }

    /**
     * @param string $unvan
     * @return EFaturaKullaniciExtended
     */
    public function withUnvan($unvan)
    {
        $new = clone $this;
        $new->unvan = $unvan;

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
     * @return EFaturaKullaniciExtended
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }

    /**
     * @return \Tnhnclskn\Efinans\Type\EFaturaKayitliKullaniciHistory
     */
    public function getEFaturaKayitliKullaniciHistoryList()
    {
        return $this->eFaturaKayitliKullaniciHistoryList;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\EFaturaKayitliKullaniciHistory $eFaturaKayitliKullaniciHistoryList
     * @return EFaturaKullaniciExtended
     */
    public function withEFaturaKayitliKullaniciHistoryList($eFaturaKayitliKullaniciHistoryList)
    {
        $new = clone $this;
        $new->eFaturaKayitliKullaniciHistoryList = $eFaturaKayitliKullaniciHistoryList;

        return $new;
    }
}

