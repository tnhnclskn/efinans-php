<?php

namespace Tnhnclskn\Efinans\Type;

class GelenBelgeDurum
{
    /**
     * @var string
     */
    private $alimTarihi;

    /**
     * @var string
     */
    private $belgeNo;

    /**
     * @var string
     */
    private $ettn;

    /**
     * @var string
     */
    private $yanitDetayi;

    /**
     * @var int
     */
    private $yanitDurumu;

    /**
     * @var string
     */
    private $yanitGonderimCevabiDetayi;

    /**
     * @var int
     */
    private $yanitGonderimCevabiKodu;

    /**
     * @var int
     */
    private $yanitGonderimDurumu;

    /**
     * @var string
     */
    private $yanitGonderimTarihi;

    /**
     * @return string
     */
    public function getAlimTarihi()
    {
        return $this->alimTarihi;
    }

    /**
     * @param string $alimTarihi
     * @return GelenBelgeDurum
     */
    public function withAlimTarihi($alimTarihi)
    {
        $new = clone $this;
        $new->alimTarihi = $alimTarihi;

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
     * @return GelenBelgeDurum
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
    public function getEttn()
    {
        return $this->ettn;
    }

    /**
     * @param string $ettn
     * @return GelenBelgeDurum
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
    public function getYanitDetayi()
    {
        return $this->yanitDetayi;
    }

    /**
     * @param string $yanitDetayi
     * @return GelenBelgeDurum
     */
    public function withYanitDetayi($yanitDetayi)
    {
        $new = clone $this;
        $new->yanitDetayi = $yanitDetayi;

        return $new;
    }

    /**
     * @return int
     */
    public function getYanitDurumu()
    {
        return $this->yanitDurumu;
    }

    /**
     * @param int $yanitDurumu
     * @return GelenBelgeDurum
     */
    public function withYanitDurumu($yanitDurumu)
    {
        $new = clone $this;
        $new->yanitDurumu = $yanitDurumu;

        return $new;
    }

    /**
     * @return string
     */
    public function getYanitGonderimCevabiDetayi()
    {
        return $this->yanitGonderimCevabiDetayi;
    }

    /**
     * @param string $yanitGonderimCevabiDetayi
     * @return GelenBelgeDurum
     */
    public function withYanitGonderimCevabiDetayi($yanitGonderimCevabiDetayi)
    {
        $new = clone $this;
        $new->yanitGonderimCevabiDetayi = $yanitGonderimCevabiDetayi;

        return $new;
    }

    /**
     * @return int
     */
    public function getYanitGonderimCevabiKodu()
    {
        return $this->yanitGonderimCevabiKodu;
    }

    /**
     * @param int $yanitGonderimCevabiKodu
     * @return GelenBelgeDurum
     */
    public function withYanitGonderimCevabiKodu($yanitGonderimCevabiKodu)
    {
        $new = clone $this;
        $new->yanitGonderimCevabiKodu = $yanitGonderimCevabiKodu;

        return $new;
    }

    /**
     * @return int
     */
    public function getYanitGonderimDurumu()
    {
        return $this->yanitGonderimDurumu;
    }

    /**
     * @param int $yanitGonderimDurumu
     * @return GelenBelgeDurum
     */
    public function withYanitGonderimDurumu($yanitGonderimDurumu)
    {
        $new = clone $this;
        $new->yanitGonderimDurumu = $yanitGonderimDurumu;

        return $new;
    }

    /**
     * @return string
     */
    public function getYanitGonderimTarihi()
    {
        return $this->yanitGonderimTarihi;
    }

    /**
     * @param string $yanitGonderimTarihi
     * @return GelenBelgeDurum
     */
    public function withYanitGonderimTarihi($yanitGonderimTarihi)
    {
        $new = clone $this;
        $new->yanitGonderimTarihi = $yanitGonderimTarihi;

        return $new;
    }
}

