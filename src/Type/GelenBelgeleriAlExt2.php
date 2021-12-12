<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GelenBelgeleriAlExt2 implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var \Tnhnclskn\Efinans\Type\Parametreler
     */
    private $parametreler;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $belgeTuru
     * @var \Tnhnclskn\Efinans\Type\Parametreler $parametreler
     */
    public function __construct($vergiTcKimlikNo, $belgeTuru, $parametreler)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeTuru = $belgeTuru;
        $this->parametreler = $parametreler;
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
     * @return GelenBelgeleriAlExt2
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
    public function getBelgeTuru()
    {
        return $this->belgeTuru;
    }

    /**
     * @param string $belgeTuru
     * @return GelenBelgeleriAlExt2
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }

    /**
     * @return \Tnhnclskn\Efinans\Type\Parametreler
     */
    public function getParametreler()
    {
        return $this->parametreler;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\Parametreler $parametreler
     * @return GelenBelgeleriAlExt2
     */
    public function withParametreler($parametreler)
    {
        $new = clone $this;
        $new->parametreler = $parametreler;

        return $new;
    }
}

