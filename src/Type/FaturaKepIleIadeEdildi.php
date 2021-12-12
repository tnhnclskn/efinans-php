<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FaturaKepIleIadeEdildi implements RequestInterface
{
    /**
     * @var string
     */
    private $uuid;

    /**
     * @var string
     */
    private $gelenGiden;

    /**
     * Constructor
     *
     * @var string $uuid
     * @var string $gelenGiden
     */
    public function __construct($uuid, $gelenGiden)
    {
        $this->uuid = $uuid;
        $this->gelenGiden = $gelenGiden;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return FaturaKepIleIadeEdildi
     */
    public function withUuid($uuid)
    {
        $new = clone $this;
        $new->uuid = $uuid;

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
     * @return FaturaKepIleIadeEdildi
     */
    public function withGelenGiden($gelenGiden)
    {
        $new = clone $this;
        $new->gelenGiden = $gelenGiden;

        return $new;
    }
}

