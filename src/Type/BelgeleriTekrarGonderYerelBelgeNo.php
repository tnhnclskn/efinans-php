<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BelgeleriTekrarGonderYerelBelgeNo implements RequestInterface
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
     * @var string $yerelBelgeNo
     * @var string $belgeTuru
     * @var string $alanEtiket
     * @var string $gonderenEtiket
     */
    public function __construct($vergiTcKimlikNo, $yerelBelgeNo, $belgeTuru, $alanEtiket, $gonderenEtiket)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->yerelBelgeNo = $yerelBelgeNo;
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
     * @return BelgeleriTekrarGonderYerelBelgeNo
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
     * @return BelgeleriTekrarGonderYerelBelgeNo
     */
    public function withYerelBelgeNo($yerelBelgeNo)
    {
        $new = clone $this;
        $new->yerelBelgeNo = $yerelBelgeNo;

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
     * @return BelgeleriTekrarGonderYerelBelgeNo
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
     * @return BelgeleriTekrarGonderYerelBelgeNo
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
     * @return BelgeleriTekrarGonderYerelBelgeNo
     */
    public function withGonderenEtiket($gonderenEtiket)
    {
        $new = clone $this;
        $new->gonderenEtiket = $gonderenEtiket;

        return $new;
    }
}

