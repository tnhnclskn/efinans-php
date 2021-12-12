<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class KontorBilgisiGetir implements RequestInterface
{
    /**
     * @var string
     */
    private $vknTckn;

    /**
     * @var string
     */
    private $kontorTipi;

    /**
     * @var string
     */
    private $kontorBirimi;

    /**
     * Constructor
     *
     * @var string $vknTckn
     * @var string $kontorTipi
     * @var string $kontorBirimi
     */
    public function __construct($vknTckn, $kontorTipi, $kontorBirimi)
    {
        $this->vknTckn = $vknTckn;
        $this->kontorTipi = $kontorTipi;
        $this->kontorBirimi = $kontorBirimi;
    }

    /**
     * @return string
     */
    public function getVknTckn()
    {
        return $this->vknTckn;
    }

    /**
     * @param string $vknTckn
     * @return KontorBilgisiGetir
     */
    public function withVknTckn($vknTckn)
    {
        $new = clone $this;
        $new->vknTckn = $vknTckn;

        return $new;
    }

    /**
     * @return string
     */
    public function getKontorTipi()
    {
        return $this->kontorTipi;
    }

    /**
     * @param string $kontorTipi
     * @return KontorBilgisiGetir
     */
    public function withKontorTipi($kontorTipi)
    {
        $new = clone $this;
        $new->kontorTipi = $kontorTipi;

        return $new;
    }

    /**
     * @return string
     */
    public function getKontorBirimi()
    {
        return $this->kontorBirimi;
    }

    /**
     * @param string $kontorBirimi
     * @return KontorBilgisiGetir
     */
    public function withKontorBirimi($kontorBirimi)
    {
        $new = clone $this;
        $new->kontorBirimi = $kontorBirimi;

        return $new;
    }
}

