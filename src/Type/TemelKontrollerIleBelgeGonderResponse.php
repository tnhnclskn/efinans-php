<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class TemelKontrollerIleBelgeGonderResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $belgeOid;

    /**
     * @return string
     */
    public function getBelgeOid()
    {
        return $this->belgeOid;
    }

    /**
     * @param string $belgeOid
     * @return TemelKontrollerIleBelgeGonderResponse
     */
    public function withBelgeOid($belgeOid)
    {
        $new = clone $this;
        $new->belgeOid = $belgeOid;

        return $new;
    }
}

