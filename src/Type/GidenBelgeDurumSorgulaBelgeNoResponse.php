<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GidenBelgeDurumSorgulaBelgeNoResponse implements ResultInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\GidenBelgeDurum
     */
    private $return;

    /**
     * @return \Tnhnclskn\Efinans\Type\GidenBelgeDurum
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\GidenBelgeDurum $return
     * @return GidenBelgeDurumSorgulaBelgeNoResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

