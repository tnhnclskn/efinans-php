<?php

namespace Tnhnclskn\Efinans\Type;

class Belge
{
    /**
     * @var string
     */
    private $belgeNo;

    /**
     * @var string
     */
    private $belgeSiraNo;

    /**
     * @var string
     */
    private $belgeTarihi;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var string
     */
    private $belgeVerisi;

    /**
     * @var string
     */
    private $ettn;

    /**
     * @var string
     */
    private $gonderenEtiket;

    /**
     * @var string
     */
    private $gonderenVknTckn;

    /**
     * @return string
     */
    public function getBelgeNo()
    {
        return $this->belgeNo;
    }

    /**
     * @param string $belgeNo
     * @return Belge
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
    public function getBelgeSiraNo()
    {
        return $this->belgeSiraNo;
    }

    /**
     * @param string $belgeSiraNo
     * @return Belge
     */
    public function withBelgeSiraNo($belgeSiraNo)
    {
        $new = clone $this;
        $new->belgeSiraNo = $belgeSiraNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeTarihi()
    {
        return $this->belgeTarihi;
    }

    /**
     * @param string $belgeTarihi
     * @return Belge
     */
    public function withBelgeTarihi($belgeTarihi)
    {
        $new = clone $this;
        $new->belgeTarihi = $belgeTarihi;

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
     * @return Belge
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
    public function getBelgeVerisi()
    {
        return $this->belgeVerisi;
    }

    /**
     * @param string $belgeVerisi
     * @return Belge
     */
    public function withBelgeVerisi($belgeVerisi)
    {
        $new = clone $this;
        $new->belgeVerisi = $belgeVerisi;

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
     * @return Belge
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
    public function getGonderenEtiket()
    {
        return $this->gonderenEtiket;
    }

    /**
     * @param string $gonderenEtiket
     * @return Belge
     */
    public function withGonderenEtiket($gonderenEtiket)
    {
        $new = clone $this;
        $new->gonderenEtiket = $gonderenEtiket;

        return $new;
    }

    /**
     * @return string
     */
    public function getGonderenVknTckn()
    {
        return $this->gonderenVknTckn;
    }

    /**
     * @param string $gonderenVknTckn
     * @return Belge
     */
    public function withGonderenVknTckn($gonderenVknTckn)
    {
        $new = clone $this;
        $new->gonderenVknTckn = $gonderenVknTckn;

        return $new;
    }
}

