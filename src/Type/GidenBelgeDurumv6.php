<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeDurumv6
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
     * @return GidenBelgeDurumv6
     */
    public function withKepDurum($kepDurum)
    {
        $new = clone $this;
        $new->kepDurum = $kepDurum;

        return $new;
    }
}

