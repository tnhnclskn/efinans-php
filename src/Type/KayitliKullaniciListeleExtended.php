<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class KayitliKullaniciListeleExtended implements RequestInterface
{
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
     * @var string $urun
     * @var int $gecmisEklensin
     */
    public function __construct($urun, $gecmisEklensin)
    {
        $this->urun = $urun;
        $this->gecmisEklensin = $gecmisEklensin;
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
     * @return KayitliKullaniciListeleExtended
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
     * @return KayitliKullaniciListeleExtended
     */
    public function withGecmisEklensin($gecmisEklensin)
    {
        $new = clone $this;
        $new->gecmisEklensin = $gecmisEklensin;

        return $new;
    }
}

