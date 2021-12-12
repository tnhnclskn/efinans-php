<?php

namespace Tnhnclskn\Efinans\Type;

class Belgev5
{
    /**
     * @var string
     */
    private $faturaGelisTarihi;

    /**
     * @return string
     */
    public function getFaturaGelisTarihi()
    {
        return $this->faturaGelisTarihi;
    }

    /**
     * @param string $faturaGelisTarihi
     * @return Belgev5
     */
    public function withFaturaGelisTarihi($faturaGelisTarihi)
    {
        $new = clone $this;
        $new->faturaGelisTarihi = $faturaGelisTarihi;

        return $new;
    }
}

