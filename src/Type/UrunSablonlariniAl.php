<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UrunSablonlariniAl implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $urun;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $urun
     */
    public function __construct($vergiTcKimlikNo, $urun)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->urun = $urun;
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
     * @return UrunSablonlariniAl
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
    public function getUrun()
    {
        return $this->urun;
    }

    /**
     * @param string $urun
     * @return UrunSablonlariniAl
     */
    public function withUrun($urun)
    {
        $new = clone $this;
        $new->urun = $urun;

        return $new;
    }
}

