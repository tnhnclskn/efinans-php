<?php

namespace Tnhnclskn\Efinans\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GidenFaturalariArsiveKaldir implements RequestInterface
{
    /**
     * @var string
     */
    private $vergiTcKimlikNo;

    /**
     * @var string
     */
    private $invoiceEttnListesi;

    /**
     * Constructor
     *
     * @var string $vergiTcKimlikNo
     * @var string $invoiceEttnListesi
     */
    public function __construct($vergiTcKimlikNo, $invoiceEttnListesi)
    {
        $this->vergiTcKimlikNo = $vergiTcKimlikNo;
        $this->invoiceEttnListesi = $invoiceEttnListesi;
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
     * @return GidenFaturalariArsiveKaldir
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
    public function getInvoiceEttnListesi()
    {
        return $this->invoiceEttnListesi;
    }

    /**
     * @param string $invoiceEttnListesi
     * @return GidenFaturalariArsiveKaldir
     */
    public function withInvoiceEttnListesi($invoiceEttnListesi)
    {
        $new = clone $this;
        $new->invoiceEttnListesi = $invoiceEttnListesi;

        return $new;
    }
}

