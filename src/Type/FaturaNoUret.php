<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FaturaNoUret implements RequestInterface
{
    /**
     * @var string
     */
    private $vknTckn;

    /**
     * @var string
     */
    private $faturaKodu;

    /**
     * Constructor
     *
     * @var string $vknTckn
     * @var string $faturaKodu
     */
    public function __construct($vknTckn, $faturaKodu)
    {
        $this->vknTckn = $vknTckn;
        $this->faturaKodu = $faturaKodu;
    }

    /**
     * @return string
     */
    public function getVknTckn()
    {
        return $this->vknTckn;
    }

    /**
     * @param string $vknTckn
     * @return FaturaNoUret
     */
    public function withVknTckn($vknTckn)
    {
        $new = clone $this;
        $new->vknTckn = $vknTckn;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaturaKodu()
    {
        return $this->faturaKodu;
    }

    /**
     * @param string $faturaKodu
     * @return FaturaNoUret
     */
    public function withFaturaKodu($faturaKodu)
    {
        $new = clone $this;
        $new->faturaKodu = $faturaKodu;

        return $new;
    }
}

