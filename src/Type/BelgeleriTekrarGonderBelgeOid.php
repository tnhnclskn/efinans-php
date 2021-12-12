<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BelgeleriTekrarGonderBelgeOid implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $belgeOid;

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
     * @var string $belgeOid
     * @var string $belgeTuru
     * @var string $alanEtiket
     * @var string $gonderenEtiket
     */
    public function __construct($vergiTcKimlikNo, $belgeOid, $belgeTuru, $alanEtiket, $gonderenEtiket)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->belgeOid = $belgeOid;
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
     * @return BelgeleriTekrarGonderBelgeOid
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
    public function getBelgeOid()
    {
        return $this->belgeOid;
    }

    /**
     * @param string $belgeOid
     * @return BelgeleriTekrarGonderBelgeOid
     */
    public function withBelgeOid($belgeOid)
    {
        $new = clone $this;
        $new->belgeOid = $belgeOid;

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
     * @return BelgeleriTekrarGonderBelgeOid
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
     * @return BelgeleriTekrarGonderBelgeOid
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
     * @return BelgeleriTekrarGonderBelgeOid
     */
    public function withGonderenEtiket($gonderenEtiket)
    {
        $new = clone $this;
        $new->gonderenEtiket = $gonderenEtiket;

        return $new;
    }
}

