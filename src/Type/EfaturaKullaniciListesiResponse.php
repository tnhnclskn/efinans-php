<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EfaturaKullaniciListesiResponse implements ResultInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\MukellefEFaturaKayit
     */
    private $return;

    /**
     * @return \Tnhnclskn\Efinans\Type\MukellefEFaturaKayit
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\MukellefEFaturaKayit $return
     * @return EfaturaKullaniciListesiResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

