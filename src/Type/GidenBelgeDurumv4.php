<?php

namespace Tnhnclskn\Efinans\Type;

class GidenBelgeDurumv4
{
    /**
     * @var string
     */
    private $gtbFiiliIhracatTarihi;

    /**
     * @var string
     */
    private $gtbGcbTescilNo;

    /**
     * @var string
     */
    private $gtbRefNo;

    /**
     * @return string
     */
    public function getGtbFiiliIhracatTarihi()
    {
        return $this->gtbFiiliIhracatTarihi;
    }

    /**
     * @param string $gtbFiiliIhracatTarihi
     * @return GidenBelgeDurumv4
     */
    public function withGtbFiiliIhracatTarihi($gtbFiiliIhracatTarihi)
    {
        $new = clone $this;
        $new->gtbFiiliIhracatTarihi = $gtbFiiliIhracatTarihi;

        return $new;
    }

    /**
     * @return string
     */
    public function getGtbGcbTescilNo()
    {
        return $this->gtbGcbTescilNo;
    }

    /**
     * @param string $gtbGcbTescilNo
     * @return GidenBelgeDurumv4
     */
    public function withGtbGcbTescilNo($gtbGcbTescilNo)
    {
        $new = clone $this;
        $new->gtbGcbTescilNo = $gtbGcbTescilNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getGtbRefNo()
    {
        return $this->gtbRefNo;
    }

    /**
     * @param string $gtbRefNo
     * @return GidenBelgeDurumv4
     */
    public function withGtbRefNo($gtbRefNo)
    {
        $new = clone $this;
        $new->gtbRefNo = $gtbRefNo;

        return $new;
    }
}

