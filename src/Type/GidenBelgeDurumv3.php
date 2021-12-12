<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeDurumv3
{
    /**
     * @var string
     */
    private $yerelBelgeOid;

    /**
     * @return string
     */
    public function getYerelBelgeOid()
    {
        return $this->yerelBelgeOid;
    }

    /**
     * @param string $yerelBelgeOid
     * @return GidenBelgeDurumv3
     */
    public function withYerelBelgeOid($yerelBelgeOid)
    {
        $new = clone $this;
        $new->yerelBelgeOid = $yerelBelgeOid;

        return $new;
    }
}

