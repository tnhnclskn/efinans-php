<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EfaturaKullaniciBilgisiResponse implements ResultInterface
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
     * @return EfaturaKullaniciBilgisiResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

