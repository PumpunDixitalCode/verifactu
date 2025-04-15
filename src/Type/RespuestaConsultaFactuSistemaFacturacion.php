<?php

namespace jdgOpenCode\verifactu\Type;

use Phpro\SoapClient\Type\ResultInterface;
use \jdgOpenCode\verifactu\Type\RespuestaConsultaType;

class RespuestaConsultaFactuSistemaFacturacion extends RespuestaConsultaType implements ResultInterface
{
    /**
     * @var array<int<0,9999>, \jdgOpenCode\verifactu\Type\RegistroRespuestaConsultaRegFacturacionType>
     */
    private array $RegistroRespuestaConsultaFactuSistemaFacturacion;

    /**
     * Datos de identificación de factura expedida para operaciones de consulta
     *
     * @var null | \jdgOpenCode\verifactu\Type\IDFacturaExpedidaBCType
     */
    private ?\jdgOpenCode\verifactu\Type\IDFacturaExpedidaBCType $ClavePaginacion = null;

    /**
     * @return array<int<0,9999>, \jdgOpenCode\verifactu\Type\RegistroRespuestaConsultaRegFacturacionType>
     */
    public function getRegistroRespuestaConsultaFactuSistemaFacturacion() : array
    {
        return $this->RegistroRespuestaConsultaFactuSistemaFacturacion;
    }

    /**
     * @param array<int<0,9999>, \jdgOpenCode\verifactu\Type\RegistroRespuestaConsultaRegFacturacionType> $RegistroRespuestaConsultaFactuSistemaFacturacion
     * @return static
     */
    public function withRegistroRespuestaConsultaFactuSistemaFacturacion(array $RegistroRespuestaConsultaFactuSistemaFacturacion) : static
    {
        $new = clone $this;
        $new->RegistroRespuestaConsultaFactuSistemaFacturacion = $RegistroRespuestaConsultaFactuSistemaFacturacion;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\IDFacturaExpedidaBCType
     */
    public function getClavePaginacion() : ?\jdgOpenCode\verifactu\Type\IDFacturaExpedidaBCType
    {
        return $this->ClavePaginacion;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\IDFacturaExpedidaBCType $ClavePaginacion
     * @return static
     */
    public function withClavePaginacion(?\jdgOpenCode\verifactu\Type\IDFacturaExpedidaBCType $ClavePaginacion) : static
    {
        $new = clone $this;
        $new->ClavePaginacion = $ClavePaginacion;

        return $new;
    }
}

