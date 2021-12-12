<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EIrsaliyeKullanicisi implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     */
    public function __construct($vergiTcKimlikNo)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
    }

    /**
     * @return string
     */
    public function getVergiTcKimlikNo()
    {
        return $this->vergiTcKimlikNo;
    }

    /**
     * @param string $vergiTcKimlikNo
     * @return EIrsaliyeKullanicisi
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }
}

