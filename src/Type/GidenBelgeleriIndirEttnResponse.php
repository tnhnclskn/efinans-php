<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GidenBelgeleriIndirEttnResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $return;

    /**
     * @return string
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param string $return
     * @return GidenBelgeleriIndirEttnResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

