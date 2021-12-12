<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CheckDateValidControl implements RequestInterface
{
    /**
     * @var string
     */
    private $arg0;

    /**
     * @var string
     */
    private $arg1;

    /**
     * Constructor
     *
     * @var string $arg0
     * @var string $arg1
     */
    public function __construct($arg0, $arg1)
    {
        $this->arg0 = $arg0;
        $this->arg1 = $arg1;
    }

    /**
     * @return string
     */
    public function getArg0()
    {
        return $this->arg0;
    }

    /**
     * @param string $arg0
     * @return CheckDateValidControl
     */
    public function withArg0($arg0)
    {
        $new = clone $this;
        $new->arg0 = $arg0;

        return $new;
    }

    /**
     * @return string
     */
    public function getArg1()
    {
        return $this->arg1;
    }

    /**
     * @param string $arg1
     * @return CheckDateValidControl
     */
    public function withArg1($arg1)
    {
        $new = clone $this;
        $new->arg1 = $arg1;

        return $new;
    }
}

