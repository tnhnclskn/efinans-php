<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class BelgeGonderWithValidateResponse implements ResultInterface
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
     * @return BelgeGonderWithValidateResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

