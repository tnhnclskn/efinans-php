<?php

namespace Tnhnclskn\Efinans\Type;

class Belgev2
{
    /**
     * @var string
     */
    private $alanEtiket;

    /**
     * @var string
     */
    private $aliciUnvan;

    /**
     * @var string
     */
    private $belgeVersiyon;

    /**
     * @var string
     */
    private $belgeXmlZipped;

    /**
     * @var \Tnhnclskn\Efinans\Type\EkBilgiler
     */
    private $ekBilgiler;

    /**
     * @var string
     */
    private $saticiUnvan;

    /**
     * @var string
     */
    private $subeKodu;

    /**
     * @var string
     */
    private $zarfId;

    /**
     * @var string
     */
    private $zarfVerisi;

    /**
     * @var string
     */
    private $zarfXml;

    /**
     * @return string
     */
    public function getAlanEtiket()
    {
        return $this->alanEtiket;
    }

    /**
     * @param string $alanEtiket
     * @return Belgev2
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
    public function getAliciUnvan()
    {
        return $this->aliciUnvan;
    }

    /**
     * @param string $aliciUnvan
     * @return Belgev2
     */
    public function withAliciUnvan($aliciUnvan)
    {
        $new = clone $this;
        $new->aliciUnvan = $aliciUnvan;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeVersiyon()
    {
        return $this->belgeVersiyon;
    }

    /**
     * @param string $belgeVersiyon
     * @return Belgev2
     */
    public function withBelgeVersiyon($belgeVersiyon)
    {
        $new = clone $this;
        $new->belgeVersiyon = $belgeVersiyon;

        return $new;
    }

    /**
     * @return string
     */
    public function getBelgeXmlZipped()
    {
        return $this->belgeXmlZipped;
    }

    /**
     * @param string $belgeXmlZipped
     * @return Belgev2
     */
    public function withBelgeXmlZipped($belgeXmlZipped)
    {
        $new = clone $this;
        $new->belgeXmlZipped = $belgeXmlZipped;

        return $new;
    }

    /**
     * @return \Tnhnclskn\Efinans\Type\EkBilgiler
     */
    public function getEkBilgiler()
    {
        return $this->ekBilgiler;
    }

    /**
     * @param \Tnhnclskn\Efinans\Type\EkBilgiler $ekBilgiler
     * @return Belgev2
     */
    public function withEkBilgiler($ekBilgiler)
    {
        $new = clone $this;
        $new->ekBilgiler = $ekBilgiler;

        return $new;
    }

    /**
     * @return string
     */
    public function getSaticiUnvan()
    {
        return $this->saticiUnvan;
    }

    /**
     * @param string $saticiUnvan
     * @return Belgev2
     */
    public function withSaticiUnvan($saticiUnvan)
    {
        $new = clone $this;
        $new->saticiUnvan = $saticiUnvan;

        return $new;
    }

    /**
     * @return string
     */
    public function getSubeKodu()
    {
        return $this->subeKodu;
    }

    /**
     * @param string $subeKodu
     * @return Belgev2
     */
    public function withSubeKodu($subeKodu)
    {
        $new = clone $this;
        $new->subeKodu = $subeKodu;

        return $new;
    }

    /**
     * @return string
     */
    public function getZarfId()
    {
        return $this->zarfId;
    }

    /**
     * @param string $zarfId
     * @return Belgev2
     */
    public function withZarfId($zarfId)
    {
        $new = clone $this;
        $new->zarfId = $zarfId;

        return $new;
    }

    /**
     * @return string
     */
    public function getZarfVerisi()
    {
        return $this->zarfVerisi;
    }

    /**
     * @param string $zarfVerisi
     * @return Belgev2
     */
    public function withZarfVerisi($zarfVerisi)
    {
        $new = clone $this;
        $new->zarfVerisi = $zarfVerisi;

        return $new;
    }

    /**
     * @return string
     */
    public function getZarfXml()
    {
        return $this->zarfXml;
    }

    /**
     * @param string $zarfXml
     * @return Belgev2
     */
    public function withZarfXml($zarfXml)
    {
        $new = clone $this;
        $new->zarfXml = $zarfXml;

        return $new;
    }
}

