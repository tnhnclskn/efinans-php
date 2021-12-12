<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EIrsaliyeKayitliKullaniciListeleResponse implements ResultInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\EIrsaliyeKullanici
     */
    private $return;

    /**
     * @return \Tnhnclskn\Efinans\Type\EIrsaliyeKullanici
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\EIrsaliyeKullanici $return
     * @return EIrsaliyeKayitliKullaniciListeleResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

