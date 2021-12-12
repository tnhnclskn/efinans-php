<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class BelgeGonderExtWithValidateResponse implements ResultInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\BelgeGonderResp
     */
    private $return;

    /**
     * @return \Tnhnclskn\Efinans\Type\BelgeGonderResp
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\BelgeGonderResp $return
     * @return BelgeGonderExtWithValidateResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

