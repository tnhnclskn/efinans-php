<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BelgelerAlindi implements RequestInterface
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
     * @var string
     */
    private $belgeTuru;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $ettn
     * @var string $belgeTuru
     */
    public function __construct($vergiTcKimlikNo, $ettn, $belgeTuru)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->ettn = $ettn;
        $this->belgeTuru = $belgeTuru;
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
     * @return BelgelerAlindi
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
     * @return BelgelerAlindi
     */
    public function withEttn($ettn)
    {
        $new = clone $this;
        $new->ettn = $ettn;

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
     * @return BelgelerAlindi
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }
}

