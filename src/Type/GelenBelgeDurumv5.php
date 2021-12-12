<?php

namespace Tnhnclskn\Efinans\Type;

class GelenBelgeDurumv5
{
    /**
     * @var string
     */
    private $yanitEttn;

    /**
     * @return string
     */
    public function getYanitEttn()
    {
        return $this->yanitEttn;
    }

    /**
     * @param string $yanitEttn
     * @return GelenBelgeDurumv5
     */
    public function withYanitEttn($yanitEttn)
    {
        $new = clone $this;
        $new->yanitEttn = $yanitEttn;

        return $new;
    }
}

