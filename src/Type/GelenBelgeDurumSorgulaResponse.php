<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GelenBelgeDurumSorgulaResponse implements ResultInterface
{
    /**
     * @var \Tnhnclskn\Efinans\Type\ServiceReturnType
     */
    private $return;

    /**
     * @return \Tnhnclskn\Efinans\Type\ServiceReturnType
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\ServiceReturnType $return
     * @return GelenBelgeDurumSorgulaResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

