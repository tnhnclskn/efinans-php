<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeDurumv5
{
    /**
     * @var string
     */
    private $yanitEttn;

    /**
     * @var string
     */
    private $yanitVerilenBelgeEttn;

    /**
     * @return string
     */
    public function getYanitEttn()
    {
        return $this->yanitEttn;
    }

    /**
     * @param string $yanitEttn
     * @return GidenBelgeDurumv5
     */
    public function withYanitEttn($yanitEttn)
    {
        $new = clone $this;
        $new->yanitEttn = $yanitEttn;

        return $new;
    }

    /**
     * @return string
     */
    public function getYanitVerilenBelgeEttn()
    {
        return $this->yanitVerilenBelgeEttn;
    }

    /**
     * @param string $yanitVerilenBelgeEttn
     * @return GidenBelgeDurumv5
     */
    public function withYanitVerilenBelgeEttn($yanitVerilenBelgeEttn)
    {
        $new = clone $this;
        $new->yanitVerilenBelgeEttn = $yanitVerilenBelgeEttn;

        return $new;
    }
}

