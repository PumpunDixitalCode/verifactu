<?php

namespace jdgOpenCode\verifactu\Type;

class FacturasSustituidas
{
    /**
     * Datos de identificación de factura sustituida o rectificada. El NIF se cogerá del NIF indicado en el bloque IDFactura
     *
     * @var non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\IDFacturaARType>
     */
    private array $IDFacturaSustituida;

    /**
     * @return non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\IDFacturaARType>
     */
    public function getIDFacturaSustituida() : array
    {
        return $this->IDFacturaSustituida;
    }

    /**
     * @param non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\IDFacturaARType> $IDFacturaSustituida
     * @return static
     */
    public function withIDFacturaSustituida(array $IDFacturaSustituida) : static
    {
        $new = clone $this;
        $new->IDFacturaSustituida = $IDFacturaSustituida;

        return $new;
    }
}

