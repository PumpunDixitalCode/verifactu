<?php

namespace jdgOpenCode\verifactu\Type;

class FacturasRectificadas
{
    /**
     * Datos de identificación de factura sustituida o rectificada. El NIF se cogerá del NIF indicado en el bloque IDFactura
     *
     * @var non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\IDFacturaARType>
     */
    private array $IDFacturaRectificada;

    /**
     * @return non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\IDFacturaARType>
     */
    public function getIDFacturaRectificada() : array
    {
        return $this->IDFacturaRectificada;
    }

    /**
     * @param non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\IDFacturaARType> $IDFacturaRectificada
     * @return static
     */
    public function withIDFacturaRectificada(array $IDFacturaRectificada) : static
    {
        $new = clone $this;
        $new->IDFacturaRectificada = $IDFacturaRectificada;

        return $new;
    }
}

