<?php

namespace jdgOpenCode\verifactu\Type;

use Phpro\SoapClient\Type\ResultInterface;
use \jdgOpenCode\verifactu\Type\RespuestaBaseType;

class RespuestaRegFactuSistemaFacturacion extends RespuestaBaseType implements ResultInterface
{
    /**
     * Estado detallado de cada línea del suministro.
     *
     * @var array<int<0,999>, \jdgOpenCode\verifactu\Type\RespuestaExpedidaType>
     */
    private array $RespuestaLinea;

    /**
     * @return array<int<0,999>, \jdgOpenCode\verifactu\Type\RespuestaExpedidaType>
     */
    public function getRespuestaLinea() : array
    {
        return $this->RespuestaLinea;
    }

    /**
     * @param array<int<0,999>, \jdgOpenCode\verifactu\Type\RespuestaExpedidaType> $RespuestaLinea
     * @return static
     */
    public function withRespuestaLinea(array $RespuestaLinea) : static
    {
        $new = clone $this;
        $new->RespuestaLinea = $RespuestaLinea;

        return $new;
    }
}

