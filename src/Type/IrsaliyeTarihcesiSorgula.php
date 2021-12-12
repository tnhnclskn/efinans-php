<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IrsaliyeTarihcesiSorgula implements RequestInterface
{
    /**
     * @var string
     */
    private $ettn;

    /**
     * @var string
     */
    private $irasliyeYonu;

    /**
     * @var string
     */
    private $vknTckn;

    /**
     * Constructor
     *
     * @var string $ettn
     * @var string $irasliyeYonu
     * @var string $vknTckn
     */
    public function __construct($ettn, $irasliyeYonu, $vknTckn)
    {
        $this->ettn = $ettn;
        $this->irasliyeYonu = $irasliyeYonu;
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
     * @return IrsaliyeTarihcesiSorgula
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
    public function getIrasliyeYonu()
    {
        return $this->irasliyeYonu;
    }

    /**
     * @param string $irasliyeYonu
     * @return IrsaliyeTarihcesiSorgula
     */
    public function withIrasliyeYonu($irasliyeYonu)
    {
        $new = clone $this;
        $new->irasliyeYonu = $irasliyeYonu;

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
     * @return IrsaliyeTarihcesiSorgula
     */
    public function withVknTckn($vknTckn)
    {
        $new = clone $this;
        $new->vknTckn = $vknTckn;

        return $new;
    }
}

