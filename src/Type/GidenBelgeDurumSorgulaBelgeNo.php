<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeDurumSorgulaBelgeNo implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeNo;

    /**
     * @var string
     */
    private $urun;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $belgeNo
     * @var string $urun
     */
    public function __construct($vergiTcKimlikNo, $belgeNo, $urun)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeNo = $belgeNo;
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
     * @return GidenBelgeDurumSorgulaBelgeNo
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
    public function getBelgeNo()
    {
        return $this->belgeNo;
    }

    /**
     * @param string $belgeNo
     * @return GidenBelgeDurumSorgulaBelgeNo
     */
    public function withBelgeNo($belgeNo)
    {
        $new = clone $this;
        $new->belgeNo = $belgeNo;

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
     * @return GidenBelgeDurumSorgulaBelgeNo
     */
    public function withUrun($urun)
    {
        $new = clone $this;
        $new->urun = $urun;

        return $new;
    }
}

