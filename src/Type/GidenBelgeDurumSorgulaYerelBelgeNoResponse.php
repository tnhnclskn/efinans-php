<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GidenBelgeDurumSorgulaYerelBelgeNoResponse implements ResultInterface
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
     * @return GidenBelgeDurumSorgulaYerelBelgeNoResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

