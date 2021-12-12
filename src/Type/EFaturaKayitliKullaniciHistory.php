<?php

namespace Tnhnclskn\Efinans\Type;

class EFaturaKayitliKullaniciHistory
{
    /**
     * @var string
     */
    private $etiket;

    /**
     * @var string
     */
    private $etiketOlusturulmaZamani;

    /**
     * @var string
     */
    private $silinmeZamani;

    /**
     * @return string
     */
    public function getEtiket()
    {
        return $this->etiket;
    }

    /**
     * @param string $etiket
     * @return EFaturaKayitliKullaniciHistory
     */
    public function withEtiket($etiket)
    {
        $new = clone $this;
        $new->etiket = $etiket;

        return $new;
    }

    /**
     * @return string
     */
    public function getEtiketOlusturulmaZamani()
    {
        return $this->etiketOlusturulmaZamani;
    }

    /**
     * @param string $etiketOlusturulmaZamani
     * @return EFaturaKayitliKullaniciHistory
     */
    public function withEtiketOlusturulmaZamani($etiketOlusturulmaZamani)
    {
        $new = clone $this;
        $new->etiketOlusturulmaZamani = $etiketOlusturulmaZamani;

        return $new;
    }

    /**
     * @return string
     */
    public function getSilinmeZamani()
    {
        return $this->silinmeZamani;
    }

    /**
     * @param string $silinmeZamani
     * @return EFaturaKayitliKullaniciHistory
     */
    public function withSilinmeZamani($silinmeZamani)
    {
        $new = clone $this;
        $new->silinmeZamani = $silinmeZamani;

        return $new;
    }
}

