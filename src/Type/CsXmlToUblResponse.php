<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CsXmlToUblResponse implements ResultInterface
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
     * @return CsXmlToUblResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

