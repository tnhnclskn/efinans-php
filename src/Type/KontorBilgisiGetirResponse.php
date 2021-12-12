<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class KontorBilgisiGetirResponse implements ResultInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\KalanKontorBilgisi
     */
    private $return;

    /**
     * @return \Tnhnclskn\Efinans\Type\KalanKontorBilgisi
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\KalanKontorBilgisi $return
     * @return KontorBilgisiGetirResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

