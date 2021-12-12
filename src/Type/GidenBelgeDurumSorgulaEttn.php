<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeDurumSorgulaEttn implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $ettn;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $ettn
     */
    public function __construct($vergiTcKimlikNo, $ettn)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->ettn = $ettn;
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
     * @return GidenBelgeDurumSorgulaEttn
     */
    public function withVergiTcKimlikNo($vergiTcKimlikNo)
    {
        $new = clone $this;
        $new->vergiTcKimlikNo = $vergiTcKimlikNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getEttn()
    {
        return $this->ettn;
    }

    /**
     * @param string $ettn
     * @return GidenBelgeDurumSorgulaEttn
     */
    public function withEttn($ettn)
    {
        $new = clone $this;
        $new->ettn = $ettn;

        return $new;
    }
}

