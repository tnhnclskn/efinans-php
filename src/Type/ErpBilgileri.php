<?php

namespace Tnhnclskn\Efinans\Type;

class ErpBilgileri
{
    /**
     * @var string
     */
    private $aciklama;

    /**
     * @var string
     */
    private $kod;

    /**
     * @return string
     */
    public function getAciklama()
    {
        return $this->aciklama;
    }

    /**
     * @param string $aciklama
     * @return ErpBilgileri
     */
    public function withAciklama($aciklama)
    {
        $new = clone $this;
        $new->aciklama = $aciklama;

        return $new;
    }

    /**
     * @return string
     */
    public function getKod()
    {
        return $this->kod;
    }

    /**
     * @param string $kod
     * @return ErpBilgileri
     */
    public function withKod($kod)
    {
        $new = clone $this;
        $new->kod = $kod;

        return $new;
    }
}

