<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class YolcuBeraberFaturaIptalEt implements RequestInterface
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
    private $seriSiraNo;

    /**
     * @var string
     */
    private $pusulaTarihi;

    /**
     * @var string
     */
    private $belgeOid;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $ettn
     * @var string $seriSiraNo
     * @var string $pusulaTarihi
     * @var string $belgeOid
     */
    public function __construct($vergiTcKimlikNo, $ettn, $seriSiraNo, $pusulaTarihi, $belgeOid)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->ettn = $ettn;
        $this->seriSiraNo = $seriSiraNo;
        $this->pusulaTarihi = $pusulaTarihi;
        $this->belgeOid = $belgeOid;
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
     * @return YolcuBeraberFaturaIptalEt
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
     * @return YolcuBeraberFaturaIptalEt
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
    public function getSeriSiraNo()
    {
        return $this->seriSiraNo;
    }

    /**
     * @param string $seriSiraNo
     * @return YolcuBeraberFaturaIptalEt
     */
    public function withSeriSiraNo($seriSiraNo)
    {
        $new = clone $this;
        $new->seriSiraNo = $seriSiraNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getPusulaTarihi()
    {
        return $this->pusulaTarihi;
    }

    /**
     * @param string $pusulaTarihi
     * @return YolcuBeraberFaturaIptalEt
     */
    public function withPusulaTarihi($pusulaTarihi)
    {
        $new = clone $this;
        $new->pusulaTarihi = $pusulaTarihi;

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
     * @return YolcuBeraberFaturaIptalEt
     */
    public function withBelgeOid($belgeOid)
    {
        $new = clone $this;
        $new->belgeOid = $belgeOid;

        return $new;
    }
}

