<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeDurumParametreleri
{
    /**
     * @var string
     */
    private $belgeNo;

    /**
     * @var string
     */
    private $belgeNoList;

    /**
     * @var string
     */
    private $belgeNoTipi;

    /**
     * @var string
     */
    private $belgeTuru;

    /**
     * @var string
     */
    private $donusTipiVersiyon;

    /**
     * @return string
     */
    public function getBelgeNo()
    {
        return $this->belgeNo;
    }

    /**
     * @param string $belgeNo
     * @return GidenBelgeDurumParametreleri
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
    public function getBelgeNoList()
    {
        return $this->belgeNoList;
    }

    /**
     * @param string $belgeNoList
     * @return GidenBelgeDurumParametreleri
     */
    public function withBelgeNoList($belgeNoList)
    {
        $new = clone $this;
        $new->belgeNoList = $belgeNoList;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeNoTipi()
    {
        return $this->belgeNoTipi;
    }

    /**
     * @param string $belgeNoTipi
     * @return GidenBelgeDurumParametreleri
     */
    public function withBelgeNoTipi($belgeNoTipi)
    {
        $new = clone $this;
        $new->belgeNoTipi = $belgeNoTipi;

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
     * @return GidenBelgeDurumParametreleri
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
    public function getDonusTipiVersiyon()
    {
        return $this->donusTipiVersiyon;
    }

    /**
     * @param string $donusTipiVersiyon
     * @return GidenBelgeDurumParametreleri
     */
    public function withDonusTipiVersiyon($donusTipiVersiyon)
    {
        $new = clone $this;
        $new->donusTipiVersiyon = $donusTipiVersiyon;

        return $new;
    }
}

