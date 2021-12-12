<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class KayitliKullaniciListeleExtendedTime implements RequestInterface
{
    /**
     * @var string
     */
    private $kayitZamani;

    /**
     * @var string
     */
    private $urun;

    /**
     * @var int
     */
    private $gecmisEklensin;

    /**
     * Constructor
     *
     * @var string $kayitZamani
     * @var string $urun
     * @var int $gecmisEklensin
     */
    public function __construct($kayitZamani, $urun, $gecmisEklensin)
    {
        $this->kayitZamani = $kayitZamani;
        $this->urun = $urun;
        $this->gecmisEklensin = $gecmisEklensin;
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
     * @return KayitliKullaniciListeleExtendedTime
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
    public function getUrun()
    {
        return $this->urun;
    }

    /**
     * @param string $urun
     * @return KayitliKullaniciListeleExtendedTime
     */
    public function withUrun($urun)
    {
        $new = clone $this;
        $new->urun = $urun;

        return $new;
    }

    /**
     * @return int
     */
    public function getGecmisEklensin()
    {
        return $this->gecmisEklensin;
    }

    /**
     * @param int $gecmisEklensin
     * @return KayitliKullaniciListeleExtendedTime
     */
    public function withGecmisEklensin($gecmisEklensin)
    {
        $new = clone $this;
        $new->gecmisEklensin = $gecmisEklensin;

        return $new;
    }
}

