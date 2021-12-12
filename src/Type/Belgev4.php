<?php

namespace Tnhnclskn\Efinans\Type;

class Belgev4
{
    /**
     * @var string
     */
    private $arsivlenmis;

    /**
     * @var string
     */
    private $belgeHash;

    /**
     * @return string
     */
    public function getArsivlenmis()
    {
        return $this->arsivlenmis;
    }

    /**
     * @param string $arsivlenmis
     * @return Belgev4
     */
    public function withArsivlenmis($arsivlenmis)
    {
        $new = clone $this;
        $new->arsivlenmis = $arsivlenmis;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeHash()
    {
        return $this->belgeHash;
    }

    /**
     * @param string $belgeHash
     * @return Belgev4
     */
    public function withBelgeHash($belgeHash)
    {
        $new = clone $this;
        $new->belgeHash = $belgeHash;

        return $new;
    }
}

