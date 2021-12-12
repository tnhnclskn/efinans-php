<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FaturaTarihcesiSorgula implements RequestInterface
{
    /**
     * @var string
     */
    private $ettn;

    /**
     * @var string
     */
    private $faturaYonu;

    /**
     * @var string
     */
    private $vknTckn;

    /**
     * Constructor
     *
     * @var string $ettn
     * @var string $faturaYonu
     * @var string $vknTckn
     */
    public function __construct($ettn, $faturaYonu, $vknTckn)
    {
        $this->ettn = $ettn;
        $this->faturaYonu = $faturaYonu;
        $this->vknTckn = $vknTckn;
    }

    /**
     * @return string
     */
    public function getEttn()
    {
        return $this->ettn;
    }

    /**
     * @param string $ettn
     * @return FaturaTarihcesiSorgula
     */
    public function withEttn($ettn)
    {
        $new = clone $this;
        $new->ettn = $ettn;

        return $new;
    }

    /**
     * @return string
     */
    public function getFaturaYonu()
    {
        return $this->faturaYonu;
    }

    /**
     * @param string $faturaYonu
     * @return FaturaTarihcesiSorgula
     */
    public function withFaturaYonu($faturaYonu)
    {
        $new = clone $this;
        $new->faturaYonu = $faturaYonu;

        return $new;
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
     * @return FaturaTarihcesiSorgula
     */
    public function withVknTckn($vknTckn)
    {
        $new = clone $this;
        $new->vknTckn = $vknTckn;

        return $new;
    }
}

