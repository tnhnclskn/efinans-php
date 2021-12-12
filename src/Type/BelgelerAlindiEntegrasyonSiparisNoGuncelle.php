<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BelgelerAlindiEntegrasyonSiparisNoGuncelle implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $ettn;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var string
     */
    private $entegrasyonHedefi;

    /**
     * @var string
     */
    private $guncellenmisSiparisNumarasi;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $ettn
     * @var string $belgeTuru
     * @var string $entegrasyonHedefi
     * @var string $guncellenmisSiparisNumarasi
     */
    public function __construct($vergiTcKimlikNo, $ettn, $belgeTuru, $entegrasyonHedefi, $guncellenmisSiparisNumarasi)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->ettn = $ettn;
        $this->belgeTuru = $belgeTuru;
        $this->entegrasyonHedefi = $entegrasyonHedefi;
        $this->guncellenmisSiparisNumarasi = $guncellenmisSiparisNumarasi;
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
     * @return BelgelerAlindiEntegrasyonSiparisNoGuncelle
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

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
     * @return BelgelerAlindiEntegrasyonSiparisNoGuncelle
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
    public function getBelgeTuru()
    {
        return $this->belgeTuru;
    }

    /**
     * @param string $belgeTuru
     * @return BelgelerAlindiEntegrasyonSiparisNoGuncelle
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
    public function getEntegrasyonHedefi()
    {
        return $this->entegrasyonHedefi;
    }

    /**
     * @param string $entegrasyonHedefi
     * @return BelgelerAlindiEntegrasyonSiparisNoGuncelle
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
    public function getGuncellenmisSiparisNumarasi()
    {
        return $this->guncellenmisSiparisNumarasi;
    }

    /**
     * @param string $guncellenmisSiparisNumarasi
     * @return BelgelerAlindiEntegrasyonSiparisNoGuncelle
     */
    public function withGuncellenmisSiparisNumarasi($guncellenmisSiparisNumarasi)
    {
        $new = clone $this;
        $new->guncellenmisSiparisNumarasi = $guncellenmisSiparisNumarasi;

        return $new;
    }
}

