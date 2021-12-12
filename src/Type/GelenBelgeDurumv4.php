<?php

namespace Tnhnclskn\Efinans\Type;

class GelenBelgeDurumv4
{
    /**
     * @var string
     */
    private $gibIptalDurum;

    /**
     * @return string
     */
    public function getGibIptalDurum()
    {
        return $this->gibIptalDurum;
    }

    /**
     * @param string $gibIptalDurum
     * @return GelenBelgeDurumv4
     */
    public function withGibIptalDurum($gibIptalDurum)
    {
        $new = clone $this;
        $new->gibIptalDurum = $gibIptalDurum;

        return $new;
    }
}

