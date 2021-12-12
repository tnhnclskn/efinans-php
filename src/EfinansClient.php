<?php

namespace Tnhnclskn\Efinans;

use Phpro\SoapClient\Caller\Caller;
use Tnhnclskn\Efinans\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class EfinansClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\GidenBelgeDurumSorgula $parameters
     * @return ResultInterface|Type\GidenBelgeDurumSorgulaResponse
     * @throws SoapException
     */
    public function gidenBelgeDurumSorgula(\Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgula $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaResponse
    {
        return ($this->caller)('gidenBelgeDurumSorgula', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeDurumSorgula $parameters
     * @return ResultInterface|Type\GelenBelgeDurumSorgulaResponse
     * @throws SoapException
     */
    public function gelenBelgeDurumSorgula(\Tnhnclskn\Efinans\Type\GelenBelgeDurumSorgula $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeDurumSorgulaResponse
    {
        return ($this->caller)('gelenBelgeDurumSorgula', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeleriListele $parameters
     * @return ResultInterface|Type\GelenBelgeleriListeleResponse
     * @throws SoapException
     */
    public function gelenBelgeleriListele(\Tnhnclskn\Efinans\Type\GelenBelgeleriListele $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeleriListeleResponse
    {
        return ($this->caller)('gelenBelgeleriListele', $parameters);
    }

    /**
     * @param RequestInterface|Type\BelgeGonder $parameters
     * @return ResultInterface|Type\BelgeGonderResponse
     * @throws SoapException
     */
    public function belgeGonder(\Tnhnclskn\Efinans\Type\BelgeGonder $parameters) : \Tnhnclskn\Efinans\Type\BelgeGonderResponse
    {
        return ($this->caller)('belgeGonder', $parameters);
    }

    /**
     * @param RequestInterface|Type\YereleAktarilacakBelgeleriAl $parameters
     * @return ResultInterface|Type\YereleAktarilacakBelgeleriAlResponse
     * @throws SoapException
     */
    public function yereleAktarilacakBelgeleriAl(\Tnhnclskn\Efinans\Type\YereleAktarilacakBelgeleriAl $parameters) : \Tnhnclskn\Efinans\Type\YereleAktarilacakBelgeleriAlResponse
    {
        return ($this->caller)('yereleAktarilacakBelgeleriAl', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeleriAl $parameters
     * @return ResultInterface|Type\GelenBelgeleriAlResponse
     * @throws SoapException
     */
    public function gelenBelgeleriAl(\Tnhnclskn\Efinans\Type\GelenBelgeleriAl $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeleriAlResponse
    {
        return ($this->caller)('gelenBelgeleriAl', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeXmlleriniAl $parameters
     * @return ResultInterface|Type\GelenBelgeXmlleriniAlResponse
     * @throws SoapException
     */
    public function gelenBelgeXmlleriniAl(\Tnhnclskn\Efinans\Type\GelenBelgeXmlleriniAl $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeXmlleriniAlResponse
    {
        return ($this->caller)('gelenBelgeXmlleriniAl', $parameters);
    }

    /**
     * @param RequestInterface|Type\EfaturaKullanicisi $parameters
     * @return ResultInterface|Type\EfaturaKullanicisiResponse
     * @throws SoapException
     */
    public function efaturaKullanicisi(\Tnhnclskn\Efinans\Type\EfaturaKullanicisi $parameters) : \Tnhnclskn\Efinans\Type\EfaturaKullanicisiResponse
    {
        return ($this->caller)('efaturaKullanicisi', $parameters);
    }

    /**
     * @param RequestInterface|Type\EFaturaKayitliKullaniciListele $parameters
     * @return ResultInterface|Type\EFaturaKayitliKullaniciListeleResponse
     * @throws SoapException
     */
    public function eFaturaKayitliKullaniciListele(\Tnhnclskn\Efinans\Type\EFaturaKayitliKullaniciListele $parameters) : \Tnhnclskn\Efinans\Type\EFaturaKayitliKullaniciListeleResponse
    {
        return ($this->caller)('eFaturaKayitliKullaniciListele', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeleriIndir $parameters
     * @return ResultInterface|Type\GelenBelgeleriIndirResponse
     * @throws SoapException
     */
    public function gelenBelgeleriIndir(\Tnhnclskn\Efinans\Type\GelenBelgeleriIndir $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeleriIndirResponse
    {
        return ($this->caller)('gelenBelgeleriIndir', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeleriIndir $parameters
     * @return ResultInterface|Type\GidenBelgeleriIndirResponse
     * @throws SoapException
     */
    public function gidenBelgeleriIndir(\Tnhnclskn\Efinans\Type\GidenBelgeleriIndir $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeleriIndirResponse
    {
        return ($this->caller)('gidenBelgeleriIndir', $parameters);
    }

    /**
     * @param RequestInterface|Type\EfaturaKullaniciBilgisi $parameters
     * @return ResultInterface|Type\EfaturaKullaniciBilgisiResponse
     * @throws SoapException
     */
    public function efaturaKullaniciBilgisi(\Tnhnclskn\Efinans\Type\EfaturaKullaniciBilgisi $parameters) : \Tnhnclskn\Efinans\Type\EfaturaKullaniciBilgisiResponse
    {
        return ($this->caller)('efaturaKullaniciBilgisi', $parameters);
    }

    /**
     * @param RequestInterface|Type\FaturaTarihcesiSorgula $parameters
     * @return ResultInterface|Type\FaturaTarihcesiSorgulaResponse
     * @throws SoapException
     */
    public function faturaTarihcesiSorgula(\Tnhnclskn\Efinans\Type\FaturaTarihcesiSorgula $parameters) : \Tnhnclskn\Efinans\Type\FaturaTarihcesiSorgulaResponse
    {
        return ($this->caller)('faturaTarihcesiSorgula', $parameters);
    }

    /**
     * @param RequestInterface|Type\IrsaliyeTarihcesiSorgula $parameters
     * @return ResultInterface|Type\IrsaliyeTarihcesiSorgulaResponse
     * @throws SoapException
     */
    public function irsaliyeTarihcesiSorgula(\Tnhnclskn\Efinans\Type\IrsaliyeTarihcesiSorgula $parameters) : \Tnhnclskn\Efinans\Type\IrsaliyeTarihcesiSorgulaResponse
    {
        return ($this->caller)('irsaliyeTarihcesiSorgula', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeEkleriAl $parameters
     * @return ResultInterface|Type\GelenBelgeEkleriAlResponse
     * @throws SoapException
     */
    public function gelenBelgeEkleriAl(\Tnhnclskn\Efinans\Type\GelenBelgeEkleriAl $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeEkleriAlResponse
    {
        return ($this->caller)('gelenBelgeEkleriAl', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeEkleriAl $parameters
     * @return ResultInterface|Type\GidenBelgeEkleriAlResponse
     * @throws SoapException
     */
    public function gidenBelgeEkleriAl(\Tnhnclskn\Efinans\Type\GidenBelgeEkleriAl $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeEkleriAlResponse
    {
        return ($this->caller)('gidenBelgeEkleriAl', $parameters);
    }

    /**
     * @param RequestInterface|Type\KayitliKullaniciListeleExtended $parameters
     * @return ResultInterface|Type\KayitliKullaniciListeleExtendedResponse
     * @throws SoapException
     */
    public function kayitliKullaniciListeleExtended(\Tnhnclskn\Efinans\Type\KayitliKullaniciListeleExtended $parameters) : \Tnhnclskn\Efinans\Type\KayitliKullaniciListeleExtendedResponse
    {
        return ($this->caller)('kayitliKullaniciListeleExtended', $parameters);
    }

    /**
     * @param RequestInterface|Type\KayitliKullaniciListeleExtendedVknTckn $parameters
     * @return ResultInterface|Type\KayitliKullaniciListeleExtendedVknTcknResponse
     * @throws SoapException
     */
    public function kayitliKullaniciListeleExtendedVknTckn(\Tnhnclskn\Efinans\Type\KayitliKullaniciListeleExtendedVknTckn $parameters) : \Tnhnclskn\Efinans\Type\KayitliKullaniciListeleExtendedVknTcknResponse
    {
        return ($this->caller)('kayitliKullaniciListeleExtendedVknTckn', $parameters);
    }

    /**
     * @param RequestInterface|Type\KayitliKullaniciListeleExtendedTime $parameters
     * @return ResultInterface|Type\KayitliKullaniciListeleExtendedTimeResponse
     * @throws SoapException
     */
    public function kayitliKullaniciListeleExtendedTime(\Tnhnclskn\Efinans\Type\KayitliKullaniciListeleExtendedTime $parameters) : \Tnhnclskn\Efinans\Type\KayitliKullaniciListeleExtendedTimeResponse
    {
        return ($this->caller)('kayitliKullaniciListeleExtendedTime', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckDateValidControl $parameters
     * @return ResultInterface|Type\CheckDateValidControlResponse
     * @throws SoapException
     */
    public function checkDateValidControl(\Tnhnclskn\Efinans\Type\CheckDateValidControl $parameters) : \Tnhnclskn\Efinans\Type\CheckDateValidControlResponse
    {
        return ($this->caller)('checkDateValidControl', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeleriListele $parameters
     * @return ResultInterface|Type\GidenBelgeleriListeleResponse
     * @throws SoapException
     */
    public function gidenBelgeleriListele(\Tnhnclskn\Efinans\Type\GidenBelgeleriListele $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeleriListeleResponse
    {
        return ($this->caller)('gidenBelgeleriListele', $parameters);
    }

    /**
     * @param RequestInterface|Type\FaturaNoUret $parameters
     * @return ResultInterface|Type\FaturaNoUretResponse
     * @throws SoapException
     */
    public function faturaNoUret(\Tnhnclskn\Efinans\Type\FaturaNoUret $parameters) : \Tnhnclskn\Efinans\Type\FaturaNoUretResponse
    {
        return ($this->caller)('faturaNoUret', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeleriListelePortal $parameters
     * @return ResultInterface|Type\GidenBelgeleriListelePortalResponse
     * @throws SoapException
     */
    public function gidenBelgeleriListelePortal(\Tnhnclskn\Efinans\Type\GidenBelgeleriListelePortal $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeleriListelePortalResponse
    {
        return ($this->caller)('gidenBelgeleriListelePortal', $parameters);
    }

    /**
     * @param RequestInterface|Type\CokluGidenBelgeDurumSorgula $parameters
     * @return ResultInterface|Type\CokluGidenBelgeDurumSorgulaResponse
     * @throws SoapException
     */
    public function cokluGidenBelgeDurumSorgula(\Tnhnclskn\Efinans\Type\CokluGidenBelgeDurumSorgula $parameters) : \Tnhnclskn\Efinans\Type\CokluGidenBelgeDurumSorgulaResponse
    {
        return ($this->caller)('cokluGidenBelgeDurumSorgula', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeDurumSorgulaExt $parameters
     * @return ResultInterface|Type\GidenBelgeDurumSorgulaExtResponse
     * @throws SoapException
     */
    public function gidenBelgeDurumSorgulaExt(\Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaExt $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaExtResponse
    {
        return ($this->caller)('gidenBelgeDurumSorgulaExt', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeDurumSorgulaPortal $parameters
     * @return ResultInterface|Type\GidenBelgeDurumSorgulaPortalResponse
     * @throws SoapException
     */
    public function gidenBelgeDurumSorgulaPortal(\Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaPortal $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaPortalResponse
    {
        return ($this->caller)('gidenBelgeDurumSorgulaPortal', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeDurumSorgulaEttn $parameters
     * @return ResultInterface|Type\GidenBelgeDurumSorgulaEttnResponse
     * @throws SoapException
     */
    public function gidenBelgeDurumSorgulaEttn(\Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaEttn $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaEttnResponse
    {
        return ($this->caller)('gidenBelgeDurumSorgulaEttn', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeDurumSorgulaBelgeNo $parameters
     * @return ResultInterface|Type\GidenBelgeDurumSorgulaBelgeNoResponse
     * @throws SoapException
     */
    public function gidenBelgeDurumSorgulaBelgeNo(\Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaBelgeNo $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaBelgeNoResponse
    {
        return ($this->caller)('gidenBelgeDurumSorgulaBelgeNo', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeDurumSorgulaYerelBelgeNo $parameters
     * @return ResultInterface|Type\GidenBelgeDurumSorgulaYerelBelgeNoResponse
     * @throws SoapException
     */
    public function gidenBelgeDurumSorgulaYerelBelgeNo(\Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaYerelBelgeNo $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeDurumSorgulaYerelBelgeNoResponse
    {
        return ($this->caller)('gidenBelgeDurumSorgulaYerelBelgeNo', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeDurumSorgulaExt $parameters
     * @return ResultInterface|Type\GelenBelgeDurumSorgulaExtResponse
     * @throws SoapException
     */
    public function gelenBelgeDurumSorgulaExt(\Tnhnclskn\Efinans\Type\GelenBelgeDurumSorgulaExt $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeDurumSorgulaExtResponse
    {
        return ($this->caller)('gelenBelgeDurumSorgulaExt', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeleriListeleExt $parameters
     * @return ResultInterface|Type\GelenBelgeleriListeleExtResponse
     * @throws SoapException
     */
    public function gelenBelgeleriListeleExt(\Tnhnclskn\Efinans\Type\GelenBelgeleriListeleExt $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeleriListeleExtResponse
    {
        return ($this->caller)('gelenBelgeleriListeleExt', $parameters);
    }

    /**
     * @param RequestInterface|Type\YereleAktarilacakBelgeleriAlExt $parameters
     * @return ResultInterface|Type\YereleAktarilacakBelgeleriAlExtResponse
     * @throws SoapException
     */
    public function yereleAktarilacakBelgeleriAlExt(\Tnhnclskn\Efinans\Type\YereleAktarilacakBelgeleriAlExt $parameters) : \Tnhnclskn\Efinans\Type\YereleAktarilacakBelgeleriAlExtResponse
    {
        return ($this->caller)('yereleAktarilacakBelgeleriAlExt', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeleriAlExt $parameters
     * @return ResultInterface|Type\GelenBelgeleriAlExtResponse
     * @throws SoapException
     */
    public function gelenBelgeleriAlExt(\Tnhnclskn\Efinans\Type\GelenBelgeleriAlExt $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeleriAlExtResponse
    {
        return ($this->caller)('gelenBelgeleriAlExt', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeleriAlExt2 $parameters
     * @return ResultInterface|Type\GelenBelgeleriAlExt2Response
     * @throws SoapException
     */
    public function gelenBelgeleriAlExt2(\Tnhnclskn\Efinans\Type\GelenBelgeleriAlExt2 $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeleriAlExt2Response
    {
        return ($this->caller)('gelenBelgeleriAlExt2', $parameters);
    }

    /**
     * @param RequestInterface|Type\BelgeGonderExt $parameters
     * @return ResultInterface|Type\BelgeGonderExtResponse
     * @throws SoapException
     */
    public function belgeGonderExt(\Tnhnclskn\Efinans\Type\BelgeGonderExt $parameters) : \Tnhnclskn\Efinans\Type\BelgeGonderExtResponse
    {
        return ($this->caller)('belgeGonderExt', $parameters);
    }

    /**
     * @param RequestInterface|Type\BelgeGonderWithValidate $parameters
     * @return ResultInterface|Type\BelgeGonderWithValidateResponse
     * @throws SoapException
     */
    public function belgeGonderWithValidate(\Tnhnclskn\Efinans\Type\BelgeGonderWithValidate $parameters) : \Tnhnclskn\Efinans\Type\BelgeGonderWithValidateResponse
    {
        return ($this->caller)('belgeGonderWithValidate', $parameters);
    }

    /**
     * @param RequestInterface|Type\BelgeGonderExtWithValidate $parameters
     * @return ResultInterface|Type\BelgeGonderExtWithValidateResponse
     * @throws SoapException
     */
    public function belgeGonderExtWithValidate(\Tnhnclskn\Efinans\Type\BelgeGonderExtWithValidate $parameters) : \Tnhnclskn\Efinans\Type\BelgeGonderExtWithValidateResponse
    {
        return ($this->caller)('belgeGonderExtWithValidate', $parameters);
    }

    /**
     * @param RequestInterface|Type\EIrsaliyeKullanicisi $parameters
     * @return ResultInterface|Type\EIrsaliyeKullanicisiResponse
     * @throws SoapException
     */
    public function eIrsaliyeKullanicisi(\Tnhnclskn\Efinans\Type\EIrsaliyeKullanicisi $parameters) : \Tnhnclskn\Efinans\Type\EIrsaliyeKullanicisiResponse
    {
        return ($this->caller)('eIrsaliyeKullanicisi', $parameters);
    }

    /**
     * @param RequestInterface|Type\EIrsaliyeKayitliKullaniciListele $parameters
     * @return ResultInterface|Type\EIrsaliyeKayitliKullaniciListeleResponse
     * @throws SoapException
     */
    public function eIrsaliyeKayitliKullaniciListele(\Tnhnclskn\Efinans\Type\EIrsaliyeKayitliKullaniciListele $parameters) : \Tnhnclskn\Efinans\Type\EIrsaliyeKayitliKullaniciListeleResponse
    {
        return ($this->caller)('eIrsaliyeKayitliKullaniciListele', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeXmlleriniAlExt $parameters
     * @return ResultInterface|Type\GelenBelgeXmlleriniAlExtResponse
     * @throws SoapException
     */
    public function gelenBelgeXmlleriniAlExt(\Tnhnclskn\Efinans\Type\GelenBelgeXmlleriniAlExt $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeXmlleriniAlExtResponse
    {
        return ($this->caller)('gelenBelgeXmlleriniAlExt', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeleriIndirExt $parameters
     * @return ResultInterface|Type\GelenBelgeleriIndirExtResponse
     * @throws SoapException
     */
    public function gelenBelgeleriIndirExt(\Tnhnclskn\Efinans\Type\GelenBelgeleriIndirExt $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeleriIndirExtResponse
    {
        return ($this->caller)('gelenBelgeleriIndirExt', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeleriIndirPortal $parameters
     * @return ResultInterface|Type\GidenBelgeleriIndirPortalResponse
     * @throws SoapException
     */
    public function gidenBelgeleriIndirPortal(\Tnhnclskn\Efinans\Type\GidenBelgeleriIndirPortal $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeleriIndirPortalResponse
    {
        return ($this->caller)('gidenBelgeleriIndirPortal', $parameters);
    }

    /**
     * @param RequestInterface|Type\EfaturaKullaniciListesi $parameters
     * @return ResultInterface|Type\EfaturaKullaniciListesiResponse
     * @throws SoapException
     */
    public function efaturaKullaniciListesi(\Tnhnclskn\Efinans\Type\EfaturaKullaniciListesi $parameters) : \Tnhnclskn\Efinans\Type\EfaturaKullaniciListesiResponse
    {
        return ($this->caller)('efaturaKullaniciListesi', $parameters);
    }

    /**
     * @param RequestInterface|Type\BelgelerAlindi $parameters
     * @return ResultInterface|Type\BelgelerAlindiResponse
     * @throws SoapException
     */
    public function belgelerAlindi(\Tnhnclskn\Efinans\Type\BelgelerAlindi $parameters) : \Tnhnclskn\Efinans\Type\BelgelerAlindiResponse
    {
        return ($this->caller)('belgelerAlindi', $parameters);
    }

    /**
     * @param RequestInterface|Type\BelgeleriTekrarGonder $parameters
     * @return ResultInterface|Type\BelgeleriTekrarGonderResponse
     * @throws SoapException
     */
    public function belgeleriTekrarGonder(\Tnhnclskn\Efinans\Type\BelgeleriTekrarGonder $parameters) : \Tnhnclskn\Efinans\Type\BelgeleriTekrarGonderResponse
    {
        return ($this->caller)('belgeleriTekrarGonder', $parameters);
    }

    /**
     * @param RequestInterface|Type\BelgeleriTekrarGonderBelgeOid $parameters
     * @return ResultInterface|Type\BelgeleriTekrarGonderBelgeOidResponse
     * @throws SoapException
     */
    public function belgeleriTekrarGonderBelgeOid(\Tnhnclskn\Efinans\Type\BelgeleriTekrarGonderBelgeOid $parameters) : \Tnhnclskn\Efinans\Type\BelgeleriTekrarGonderBelgeOidResponse
    {
        return ($this->caller)('belgeleriTekrarGonderBelgeOid', $parameters);
    }

    /**
     * @param RequestInterface|Type\BelgeleriTekrarGonderYerelBelgeNo $parameters
     * @return ResultInterface|Type\BelgeleriTekrarGonderYerelBelgeNoResponse
     * @throws SoapException
     */
    public function belgeleriTekrarGonderYerelBelgeNo(\Tnhnclskn\Efinans\Type\BelgeleriTekrarGonderYerelBelgeNo $parameters) : \Tnhnclskn\Efinans\Type\BelgeleriTekrarGonderYerelBelgeNoResponse
    {
        return ($this->caller)('belgeleriTekrarGonderYerelBelgeNo', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeleriIndirEttn $parameters
     * @return ResultInterface|Type\GidenBelgeleriIndirEttnResponse
     * @throws SoapException
     */
    public function gidenBelgeleriIndirEttn(\Tnhnclskn\Efinans\Type\GidenBelgeleriIndirEttn $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeleriIndirEttnResponse
    {
        return ($this->caller)('gidenBelgeleriIndirEttn', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenFaturalariArsiveKaldir $parameters
     * @return ResultInterface|Type\GelenFaturalariArsiveKaldirResponse
     * @throws SoapException
     */
    public function gelenFaturalariArsiveKaldir(\Tnhnclskn\Efinans\Type\GelenFaturalariArsiveKaldir $parameters) : \Tnhnclskn\Efinans\Type\GelenFaturalariArsiveKaldirResponse
    {
        return ($this->caller)('gelenFaturalariArsiveKaldir', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenFaturalariArsiveKaldir $parameters
     * @return ResultInterface|Type\GidenFaturalariArsiveKaldirResponse
     * @throws SoapException
     */
    public function gidenFaturalariArsiveKaldir(\Tnhnclskn\Efinans\Type\GidenFaturalariArsiveKaldir $parameters) : \Tnhnclskn\Efinans\Type\GidenFaturalariArsiveKaldirResponse
    {
        return ($this->caller)('gidenFaturalariArsiveKaldir', $parameters);
    }

    /**
     * @param RequestInterface|Type\KontorBilgisiGetir $parameters
     * @return ResultInterface|Type\KontorBilgisiGetirResponse
     * @throws SoapException
     */
    public function kontorBilgisiGetir(\Tnhnclskn\Efinans\Type\KontorBilgisiGetir $parameters) : \Tnhnclskn\Efinans\Type\KontorBilgisiGetirResponse
    {
        return ($this->caller)('kontorBilgisiGetir', $parameters);
    }

    /**
     * @param RequestInterface|Type\TemelKontrollerIleBelgeGonder $parameters
     * @return ResultInterface|Type\TemelKontrollerIleBelgeGonderResponse
     * @throws SoapException
     */
    public function temelKontrollerIleBelgeGonder(\Tnhnclskn\Efinans\Type\TemelKontrollerIleBelgeGonder $parameters) : \Tnhnclskn\Efinans\Type\TemelKontrollerIleBelgeGonderResponse
    {
        return ($this->caller)('temelKontrollerIleBelgeGonder', $parameters);
    }

    /**
     * @param RequestInterface|Type\CsXmlOnizleme $parameters
     * @return ResultInterface|Type\CsXmlOnizlemeResponse
     * @throws SoapException
     */
    public function csXmlOnizleme(\Tnhnclskn\Efinans\Type\CsXmlOnizleme $parameters) : \Tnhnclskn\Efinans\Type\CsXmlOnizlemeResponse
    {
        return ($this->caller)('csXmlOnizleme', $parameters);
    }

    /**
     * @param RequestInterface|Type\CsXmlToUbl $parameters
     * @return ResultInterface|Type\CsXmlToUblResponse
     * @throws SoapException
     */
    public function csXmlToUbl(\Tnhnclskn\Efinans\Type\CsXmlToUbl $parameters) : \Tnhnclskn\Efinans\Type\CsXmlToUblResponse
    {
        return ($this->caller)('csXmlToUbl', $parameters);
    }

    /**
     * @param RequestInterface|Type\UblOnizleme $parameters
     * @return ResultInterface|Type\UblOnizlemeResponse
     * @throws SoapException
     */
    public function ublOnizleme(\Tnhnclskn\Efinans\Type\UblOnizleme $parameters) : \Tnhnclskn\Efinans\Type\UblOnizlemeResponse
    {
        return ($this->caller)('ublOnizleme', $parameters);
    }

    /**
     * @param RequestInterface|Type\ErpBilgileriBelirle $parameters
     * @return ResultInterface|Type\ErpBilgileriBelirleResponse
     * @throws SoapException
     */
    public function erpBilgileriBelirle(\Tnhnclskn\Efinans\Type\ErpBilgileriBelirle $parameters) : \Tnhnclskn\Efinans\Type\ErpBilgileriBelirleResponse
    {
        return ($this->caller)('erpBilgileriBelirle', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenTasinanBelgeleriIndir $parameters
     * @return ResultInterface|Type\GelenTasinanBelgeleriIndirResponse
     * @throws SoapException
     */
    public function gelenTasinanBelgeleriIndir(\Tnhnclskn\Efinans\Type\GelenTasinanBelgeleriIndir $parameters) : \Tnhnclskn\Efinans\Type\GelenTasinanBelgeleriIndirResponse
    {
        return ($this->caller)('gelenTasinanBelgeleriIndir', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenTasinanBelgeleriIndir $parameters
     * @return ResultInterface|Type\GidenTasinanBelgeleriIndirResponse
     * @throws SoapException
     */
    public function gidenTasinanBelgeleriIndir(\Tnhnclskn\Efinans\Type\GidenTasinanBelgeleriIndir $parameters) : \Tnhnclskn\Efinans\Type\GidenTasinanBelgeleriIndirResponse
    {
        return ($this->caller)('gidenTasinanBelgeleriIndir', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenIrsaliyeleriArsiveKaldir $parameters
     * @return ResultInterface|Type\GelenIrsaliyeleriArsiveKaldirResponse
     * @throws SoapException
     */
    public function gelenIrsaliyeleriArsiveKaldir(\Tnhnclskn\Efinans\Type\GelenIrsaliyeleriArsiveKaldir $parameters) : \Tnhnclskn\Efinans\Type\GelenIrsaliyeleriArsiveKaldirResponse
    {
        return ($this->caller)('gelenIrsaliyeleriArsiveKaldir', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenIrsaliyeleriArsiveKaldir $parameters
     * @return ResultInterface|Type\GidenIrsaliyeleriArsiveKaldirResponse
     * @throws SoapException
     */
    public function gidenIrsaliyeleriArsiveKaldir(\Tnhnclskn\Efinans\Type\GidenIrsaliyeleriArsiveKaldir $parameters) : \Tnhnclskn\Efinans\Type\GidenIrsaliyeleriArsiveKaldirResponse
    {
        return ($this->caller)('gidenIrsaliyeleriArsiveKaldir', $parameters);
    }

    /**
     * @param RequestInterface|Type\GidenBelgeTutarBilgileriSorgula $parameters
     * @return ResultInterface|Type\GidenBelgeTutarBilgileriSorgulaResponse
     * @throws SoapException
     */
    public function gidenBelgeTutarBilgileriSorgula(\Tnhnclskn\Efinans\Type\GidenBelgeTutarBilgileriSorgula $parameters) : \Tnhnclskn\Efinans\Type\GidenBelgeTutarBilgileriSorgulaResponse
    {
        return ($this->caller)('gidenBelgeTutarBilgileriSorgula', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenBelgeTutarBilgileriSorgula $parameters
     * @return ResultInterface|Type\GelenBelgeTutarBilgileriSorgulaResponse
     * @throws SoapException
     */
    public function gelenBelgeTutarBilgileriSorgula(\Tnhnclskn\Efinans\Type\GelenBelgeTutarBilgileriSorgula $parameters) : \Tnhnclskn\Efinans\Type\GelenBelgeTutarBilgileriSorgulaResponse
    {
        return ($this->caller)('gelenBelgeTutarBilgileriSorgula', $parameters);
    }

    /**
     * @param RequestInterface|Type\FaturaMailGonder $parameters
     * @return ResultInterface|Type\FaturaMailGonderResponse
     * @throws SoapException
     */
    public function faturaMailGonder(\Tnhnclskn\Efinans\Type\FaturaMailGonder $parameters) : \Tnhnclskn\Efinans\Type\FaturaMailGonderResponse
    {
        return ($this->caller)('faturaMailGonder', $parameters);
    }

    /**
     * @param RequestInterface|Type\IrsaliyeMailGonder $parameters
     * @return ResultInterface|Type\IrsaliyeMailGonderResponse
     * @throws SoapException
     */
    public function irsaliyeMailGonder(\Tnhnclskn\Efinans\Type\IrsaliyeMailGonder $parameters) : \Tnhnclskn\Efinans\Type\IrsaliyeMailGonderResponse
    {
        return ($this->caller)('irsaliyeMailGonder', $parameters);
    }

    /**
     * @param RequestInterface|Type\YolcuBeraberFaturaIptalEt $parameters
     * @return ResultInterface|Type\YolcuBeraberFaturaIptalEtResponse
     * @throws SoapException
     */
    public function yolcuBeraberFaturaIptalEt(\Tnhnclskn\Efinans\Type\YolcuBeraberFaturaIptalEt $parameters) : \Tnhnclskn\Efinans\Type\YolcuBeraberFaturaIptalEtResponse
    {
        return ($this->caller)('yolcuBeraberFaturaIptalEt', $parameters);
    }

    /**
     * @param RequestInterface|Type\BelgelerAlindiEntegrasyonSiparisNoGuncelle $parameters
     * @return ResultInterface|Type\BelgelerAlindiEntegrasyonSiparisNoGuncelleResponse
     * @throws SoapException
     */
    public function belgelerAlindiEntegrasyonSiparisNoGuncelle(\Tnhnclskn\Efinans\Type\BelgelerAlindiEntegrasyonSiparisNoGuncelle $parameters) : \Tnhnclskn\Efinans\Type\BelgelerAlindiEntegrasyonSiparisNoGuncelleResponse
    {
        return ($this->caller)('belgelerAlindiEntegrasyonSiparisNoGuncelle', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenStandartRapolariAl $parameters
     * @return ResultInterface|Type\GelenStandartRapolariAlResponse
     * @throws SoapException
     */
    public function gelenStandartRapolariAl(\Tnhnclskn\Efinans\Type\GelenStandartRapolariAl $parameters) : \Tnhnclskn\Efinans\Type\GelenStandartRapolariAlResponse
    {
        return ($this->caller)('gelenStandartRapolariAl', $parameters);
    }

    /**
     * @param RequestInterface|Type\GelenTamamlananRapolariAl $parameters
     * @return ResultInterface|Type\GelenTamamlananRapolariAlResponse
     * @throws SoapException
     */
    public function gelenTamamlananRapolariAl(\Tnhnclskn\Efinans\Type\GelenTamamlananRapolariAl $parameters) : \Tnhnclskn\Efinans\Type\GelenTamamlananRapolariAlResponse
    {
        return ($this->caller)('gelenTamamlananRapolariAl', $parameters);
    }

    /**
     * @param RequestInterface|Type\WsKullanicisiKaydet $parameters
     * @return ResultInterface|Type\WsKullanicisiKaydetResponse
     * @throws SoapException
     */
    public function wsKullanicisiKaydet(\Tnhnclskn\Efinans\Type\WsKullanicisiKaydet $parameters) : \Tnhnclskn\Efinans\Type\WsKullanicisiKaydetResponse
    {
        return ($this->caller)('wsKullanicisiKaydet', $parameters);
    }

    /**
     * @param RequestInterface|Type\UrunSablonlariniAl $parameters
     * @return ResultInterface|Type\UrunSablonlariniAlResponse
     * @throws SoapException
     */
    public function urunSablonlariniAl(\Tnhnclskn\Efinans\Type\UrunSablonlariniAl $parameters) : \Tnhnclskn\Efinans\Type\UrunSablonlariniAlResponse
    {
        return ($this->caller)('urunSablonlariniAl', $parameters);
    }

    /**
     * @param RequestInterface|Type\FaturaKepIleIadeEdildi $parameters
     * @return ResultInterface|Type\FaturaKepIleIadeEdildiResponse
     * @throws SoapException
     */
    public function faturaKepIleIadeEdildi(\Tnhnclskn\Efinans\Type\FaturaKepIleIadeEdildi $parameters) : \Tnhnclskn\Efinans\Type\FaturaKepIleIadeEdildiResponse
    {
        return ($this->caller)('faturaKepIleIadeEdildi', $parameters);
    }

    /**
     * @param RequestInterface|Type\FaturaKepIleIadeEdildiIptal $parameters
     * @return ResultInterface|Type\FaturaKepIleIadeEdildiIptalResponse
     * @throws SoapException
     */
    public function faturaKepIleIadeEdildiIptal(\Tnhnclskn\Efinans\Type\FaturaKepIleIadeEdildiIptal $parameters) : \Tnhnclskn\Efinans\Type\FaturaKepIleIadeEdildiIptalResponse
    {
        return ($this->caller)('faturaKepIleIadeEdildiIptal', $parameters);
    }

    /**
     * @param RequestInterface|Type\FaturayaItirazEdildi $parameters
     * @return ResultInterface|Type\FaturayaItirazEdildiResponse
     * @throws SoapException
     */
    public function faturayaItirazEdildi(\Tnhnclskn\Efinans\Type\FaturayaItirazEdildi $parameters) : \Tnhnclskn\Efinans\Type\FaturayaItirazEdildiResponse
    {
        return ($this->caller)('faturayaItirazEdildi', $parameters);
    }

    /**
     * @param RequestInterface|Type\FaturayaItirazEdildiIptal $parameters
     * @return ResultInterface|Type\FaturayaItirazEdildiIptalResponse
     * @throws SoapException
     */
    public function faturayaItirazEdildiIptal(\Tnhnclskn\Efinans\Type\FaturayaItirazEdildiIptal $parameters) : \Tnhnclskn\Efinans\Type\FaturayaItirazEdildiIptalResponse
    {
        return ($this->caller)('faturayaItirazEdildiIptal', $parameters);
    }

    /**
     * @param RequestInterface|Type\ToplamBelgeSayisiGetir $parameters
     * @return ResultInterface|Type\ToplamBelgeSayisiGetirResponse
     * @throws SoapException
     */
    public function toplamBelgeSayisiGetir(\Tnhnclskn\Efinans\Type\ToplamBelgeSayisiGetir $parameters) : \Tnhnclskn\Efinans\Type\ToplamBelgeSayisiGetirResponse
    {
        return ($this->caller)('toplamBelgeSayisiGetir', $parameters);
    }
}

