<?php

namespace Tnhnclskn\Efinans\Type;

class MukellefEFaturaKayit
{
    /**
     * @var \Tnhnclskn\Efinans\Type\EFaturaKullanici
     */
    private $efaturaKullaniciListesi;

    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @return \Tnhnclskn\Efinans\Type\EFaturaKullanici
     */
    public function getEfaturaKullaniciListesi()
    {
        return $this->efaturaKullaniciListesi;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\EFaturaKullanici $efaturaKullaniciListesi
     * @return MukellefEFaturaKayit
     */
    public function withEfaturaKullaniciListesi($efaturaKullaniciListesi)
    {
        $new = clone $this;
        $new->efaturaKullaniciListesi = $efaturaKullaniciListesi;

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
     * @return MukellefEFaturaKayit
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }
}

