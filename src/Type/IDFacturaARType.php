<?php

namespace jdgOpenCode\verifactu\Type;

class IDFacturaARType
{
    /**
     * NIF del obligado
     *
     * @var string
     */
    private string $IDEmisorFactura;

    /**
     * Nº Serie+Nº Factura de la factura
     *
     * @var string
     */
    private string $NumSerieFactura;

    /**
     * Fecha de emisión de la factura sustituida o rectificada
     *
     * @var string
     */
    private string $FechaExpedicionFactura;

    /**
     * @return string
     */
    public function getIDEmisorFactura() : string
    {
        return $this->IDEmisorFactura;
    }

    /**
     * @param string $IDEmisorFactura
     * @return static
     */
    public function withIDEmisorFactura(string $IDEmisorFactura) : static
    {
        $new = clone $this;
        $new->IDEmisorFactura = $IDEmisorFactura;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumSerieFactura() : string
    {
        return $this->NumSerieFactura;
    }

    /**
     * @param string $NumSerieFactura
     * @return static
     */
    public function withNumSerieFactura(string $NumSerieFactura) : static
    {
        $new = clone $this;
        $new->NumSerieFactura = $NumSerieFactura;

        return $new;
    }

    /**
     * @return string
     */
    public function getFechaExpedicionFactura() : string
    {
        return $this->FechaExpedicionFactura;
    }

    /**
     * @param string $FechaExpedicionFactura
     * @return static
     */
    public function withFechaExpedicionFactura(string $FechaExpedicionFactura) : static
    {
        $new = clone $this;
        $new->FechaExpedicionFactura = $FechaExpedicionFactura;

        return $new;
    }
}

