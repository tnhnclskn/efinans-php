<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeEkleriAl implements RequestInterface
{
    /**
     * @var string
     */
    private $uuid;

    /**
     * @var string
     */
    private $vknTckn;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * Constructor
     *
     * @var string $uuid
     * @var string $vknTckn
     * @var string $belgeTuru
     */
    public function __construct($uuid, $vknTckn, $belgeTuru)
    {
        $this->uuid = $uuid;
        $this->vknTckn = $vknTckn;
        $this->belgeTuru = $belgeTuru;
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
     * @return GidenBelgeEkleriAl
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
    public function getVknTckn()
    {
        return $this->vknTckn;
    }

    /**
     * @param string $vknTckn
     * @return GidenBelgeEkleriAl
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
    public function getBelgeTuru()
    {
        return $this->belgeTuru;
    }

    /**
     * @param string $belgeTuru
     * @return GidenBelgeEkleriAl
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }
}

