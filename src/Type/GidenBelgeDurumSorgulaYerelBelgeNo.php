<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenBelgeDurumSorgulaYerelBelgeNo implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $yerelBelgeNo;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $yerelBelgeNo
     */
    public function __construct($vergiTcKimlikNo, $yerelBelgeNo)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->yerelBelgeNo = $yerelBelgeNo;
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
     * @return GidenBelgeDurumSorgulaYerelBelgeNo
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
    public function getYerelBelgeNo()
    {
        return $this->yerelBelgeNo;
    }

    /**
     * @param string $yerelBelgeNo
     * @return GidenBelgeDurumSorgulaYerelBelgeNo
     */
    public function withYerelBelgeNo($yerelBelgeNo)
    {
        $new = clone $this;
        $new->yerelBelgeNo = $yerelBelgeNo;

        return $new;
    }
}

