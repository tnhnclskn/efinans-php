<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BelgeleriTekrarGonder implements RequestInterface
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
     * @var string
     */
    private $alanEtiket;

    /**
     * @var string
     */
    private $gonderenEtiket;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $ettn
     * @var string $belgeTuru
     * @var string $alanEtiket
     * @var string $gonderenEtiket
     */
    public function __construct($vergiTcKimlikNo, $ettn, $belgeTuru, $alanEtiket, $gonderenEtiket)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->ettn = $ettn;
        $this->belgeTuru = $belgeTuru;
        $this->alanEtiket = $alanEtiket;
        $this->gonderenEtiket = $gonderenEtiket;
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
     * @return BelgeleriTekrarGonder
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
     * @return BelgeleriTekrarGonder
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
     * @return BelgeleriTekrarGonder
     */
    public function withBelgeTuru($belgeTuru)
    {
        $new = clone $this;
        $new->belgeTuru = $belgeTuru;

        return $new;
    }

    /**
     * @return string
     */
    public function getAlanEtiket()
    {
        return $this->alanEtiket;
    }

    /**
     * @param string $alanEtiket
     * @return BelgeleriTekrarGonder
     */
    public function withAlanEtiket($alanEtiket)
    {
        $new = clone $this;
        $new->alanEtiket = $alanEtiket;

        return $new;
    }

    /**
     * @return string
     */
    public function getGonderenEtiket()
    {
        return $this->gonderenEtiket;
    }

    /**
     * @param string $gonderenEtiket
     * @return BelgeleriTekrarGonder
     */
    public function withGonderenEtiket($gonderenEtiket)
    {
        $new = clone $this;
        $new->gonderenEtiket = $gonderenEtiket;

        return $new;
    }
}

