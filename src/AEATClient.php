<?php

namespace jdgOpenCode\verifactu;

use Phpro\SoapClient\Caller\Caller;
use jdgOpenCode\verifactu\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class AEATClient
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
     * @param RequestInterface & Type\RegFactuSistemaFacturacion $RegFactuSistemaFacturacion
     * @return ResultInterface & Type\RespuestaRegFactuSistemaFacturacion
     * @throws SoapException
     */
    public function regFactuSistemaFacturacion(\jdgOpenCode\verifactu\Type\RegFactuSistemaFacturacion $RegFactuSistemaFacturacion) : \jdgOpenCode\verifactu\Type\RespuestaRegFactuSistemaFacturacion
    {
        $response = ($this->caller)('RegFactuSistemaFacturacion', $RegFactuSistemaFacturacion);

        \Psl\Type\instance_of(\jdgOpenCode\verifactu\Type\RespuestaRegFactuSistemaFacturacion::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ConsultaFactuSistemaFacturacion $ConsultaFactuSistemaFacturacion
     * @return ResultInterface & Type\RespuestaConsultaFactuSistemaFacturacion
     * @throws SoapException
     */
    public function consultaFactuSistemaFacturacion(\jdgOpenCode\verifactu\Type\ConsultaFactuSistemaFacturacion $ConsultaFactuSistemaFacturacion) : \jdgOpenCode\verifactu\Type\RespuestaConsultaFactuSistemaFacturacion
    {
        $response = ($this->caller)('ConsultaFactuSistemaFacturacion', $ConsultaFactuSistemaFacturacion);

        \Psl\Type\instance_of(\jdgOpenCode\verifactu\Type\RespuestaConsultaFactuSistemaFacturacion::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

