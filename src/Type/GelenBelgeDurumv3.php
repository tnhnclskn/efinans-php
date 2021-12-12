<?php

namespace Tnhnclskn\Efinans\Type;

class GelenBelgeDurumv3
{
    /**
     * @var string
     */
    private $kepDurum;

    /**
     * @return string
     */
    public function getKepDurum()
    {
        return $this->kepDurum;
    }

    /**
     * @param string $kepDurum
     * @return GelenBelgeDurumv3
     */
    public function withKepDurum($kepDurum)
    {
        $new = clone $this;
        $new->kepDurum = $kepDurum;

        return $new;
    }
}

