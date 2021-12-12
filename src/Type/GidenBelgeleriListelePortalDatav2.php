<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeleriListelePortalDatav2
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
     * @return GidenBelgeleriListelePortalDatav2
     */
    public function withYanitEttn($yanitEttn)
    {
        $new = clone $this;
        $new->yanitEttn = $yanitEttn;

        return $new;
    }
}

