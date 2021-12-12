<?php

namespace Tnhnclskn\Efinans\Type;

class GelenBelgeDurumv2
{
    /**
     * @var int
     */
    private $siraNo;

    /**
     * @var int
     */
    private $yereleAktarimDurumu;

    /**
     * @return int
     */
    public function getSiraNo()
    {
        return $this->siraNo;
    }

    /**
     * @param int $siraNo
     * @return GelenBelgeDurumv2
     */
    public function withSiraNo($siraNo)
    {
        $new = clone $this;
        $new->siraNo = $siraNo;

        return $new;
    }

    /**
     * @return int
     */
    public function getYereleAktarimDurumu()
    {
        return $this->yereleAktarimDurumu;
    }

    /**
     * @param int $yereleAktarimDurumu
     * @return GelenBelgeDurumv2
     */
    public function withYereleAktarimDurumu($yereleAktarimDurumu)
    {
        $new = clone $this;
        $new->yereleAktarimDurumu = $yereleAktarimDurumu;

        return $new;
    }
}

