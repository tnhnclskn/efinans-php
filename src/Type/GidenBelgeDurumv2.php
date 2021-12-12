<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeDurumv2
{
    /**
     * @var bool
     */
    private $ulastiMi;

    /**
     * @var bool
     */
    private $yenidenGonderilebilirMi;

    /**
     * @return bool
     */
    public function getUlastiMi()
    {
        return $this->ulastiMi;
    }

    /**
     * @param bool $ulastiMi
     * @return GidenBelgeDurumv2
     */
    public function withUlastiMi($ulastiMi)
    {
        $new = clone $this;
        $new->ulastiMi = $ulastiMi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getYenidenGonderilebilirMi()
    {
        return $this->yenidenGonderilebilirMi;
    }

    /**
     * @param bool $yenidenGonderilebilirMi
     * @return GidenBelgeDurumv2
     */
    public function withYenidenGonderilebilirMi($yenidenGonderilebilirMi)
    {
        $new = clone $this;
        $new->yenidenGonderilebilirMi = $yenidenGonderilebilirMi;

        return $new;
    }
}

