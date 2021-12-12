<?php

namespace Tnhnclskn\Efinans\Type;

class Belgev3
{
    /**
     * @var string
     */
    private $odenecekTutar;

    /**
     * @var string
     */
    private $odenecekTutarDovizCinsi;

    /**
     * @return string
     */
    public function getOdenecekTutar()
    {
        return $this->odenecekTutar;
    }

    /**
     * @param string $odenecekTutar
     * @return Belgev3
     */
    public function withOdenecekTutar($odenecekTutar)
    {
        $new = clone $this;
        $new->odenecekTutar = $odenecekTutar;

        return $new;
    }

    /**
     * @return string
     */
    public function getOdenecekTutarDovizCinsi()
    {
        return $this->odenecekTutarDovizCinsi;
    }

    /**
     * @param string $odenecekTutarDovizCinsi
     * @return Belgev3
     */
    public function withOdenecekTutarDovizCinsi($odenecekTutarDovizCinsi)
    {
        $new = clone $this;
        $new->odenecekTutarDovizCinsi = $odenecekTutarDovizCinsi;

        return $new;
    }
}

