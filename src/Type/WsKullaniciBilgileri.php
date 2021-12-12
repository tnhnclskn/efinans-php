<?php

namespace Tnhnclskn\Efinans\Type;

class WsKullaniciBilgileri
{
    /**
     * @var string
     */
    private $kullaniciKodu;

    /**
     * @var string
     */
    private $sifre;

    /**
     * @return string
     */
    public function getKullaniciKodu()
    {
        return $this->kullaniciKodu;
    }

    /**
     * @param string $kullaniciKodu
     * @return WsKullaniciBilgileri
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
    public function getSifre()
    {
        return $this->sifre;
    }

    /**
     * @param string $sifre
     * @return WsKullaniciBilgileri
     */
    public function withSifre($sifre)
    {
        $new = clone $this;
        $new->sifre = $sifre;

        return $new;
    }
}

