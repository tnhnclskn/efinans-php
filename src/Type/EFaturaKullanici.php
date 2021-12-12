<?php

namespace Tnhnclskn\Efinans\Type;

class EFaturaKullanici
{
    /**
     * @var string
     */
    private $etiket;

    /**
     * @var bool
     */
    private $kamuKurulusu;

    /**
     * @var string
     */
    private $kayitZamani;

    /**
     * @var string
     */
    private $unvan;

    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @return string
     */
    public function getEtiket()
    {
        return $this->etiket;
    }

    /**
     * @param string $etiket
     * @return EFaturaKullanici
     */
    public function withEtiket($etiket)
    {
        $new = clone $this;
        $new->etiket = $etiket;

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
     * @return EFaturaKullanici
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
     * @return EFaturaKullanici
     */
    public function withKayitZamani($kayitZamani)
    {
        $new = clone $this;
        $new->kayitZamani = $kayitZamani;

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
     * @return EFaturaKullanici
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
     * @return EFaturaKullanici
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }
}

