<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class WsKullanicisiKaydetResponse implements ResultInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\WsKullaniciBilgileri
     */
    private $return;

    /**
     * @return \Tnhnclskn\Efinans\Type\WsKullaniciBilgileri
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\WsKullaniciBilgileri $return
     * @return WsKullanicisiKaydetResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

