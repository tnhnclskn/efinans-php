<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FaturayaItirazEdildi implements RequestInterface
{
    /**
     * @var string
     */
    private $ettnList;

    /**
     * @var string
     */
    private $gelenGiden;

    /**
     * @var string
     */
    private $iptalSenaryosu;

    /**
     * Constructor
     *
     * @var string $ettnList
     * @var string $gelenGiden
     * @var string $iptalSenaryosu
     */
    public function __construct($ettnList, $gelenGiden, $iptalSenaryosu)
    {
        $this->ettnList = $ettnList;
        $this->gelenGiden = $gelenGiden;
        $this->iptalSenaryosu = $iptalSenaryosu;
    }

    /**
     * @return string
     */
    public function getEttnList()
    {
        return $this->ettnList;
    }

    /**
     * @param string $ettnList
     * @return FaturayaItirazEdildi
     */
    public function withEttnList($ettnList)
    {
        $new = clone $this;
        $new->ettnList = $ettnList;

        return $new;
    }

    /**
     * @return string
     */
    public function getGelenGiden()
    {
        return $this->gelenGiden;
    }

    /**
     * @param string $gelenGiden
     * @return FaturayaItirazEdildi
     */
    public function withGelenGiden($gelenGiden)
    {
        $new = clone $this;
        $new->gelenGiden = $gelenGiden;

        return $new;
    }

    /**
     * @return string
     */
    public function getIptalSenaryosu()
    {
        return $this->iptalSenaryosu;
    }

    /**
     * @param string $iptalSenaryosu
     * @return FaturayaItirazEdildi
     */
    public function withIptalSenaryosu($iptalSenaryosu)
    {
        $new = clone $this;
        $new->iptalSenaryosu = $iptalSenaryosu;

        return $new;
    }
}

