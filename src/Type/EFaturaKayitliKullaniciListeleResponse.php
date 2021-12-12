<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EFaturaKayitliKullaniciListeleResponse implements ResultInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\EFaturaKullanici
     */
    private $return;

    /**
     * @return \Tnhnclskn\Efinans\Type\EFaturaKullanici
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\EFaturaKullanici $return
     * @return EFaturaKayitliKullaniciListeleResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

