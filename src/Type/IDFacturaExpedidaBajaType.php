<?php

namespace jdgOpenCode\verifactu\Type;

class IDFacturaExpedidaBajaType
{
    /**
     * NIF del obligado
     *
     * @var string
     */
    private string $IDEmisorFacturaAnulada;

    /**
     * Nº Serie+Nº Factura de la Factura que se anula.
     *
     * @var string
     */
    private string $NumSerieFacturaAnulada;

    /**
     * Fecha de emisión de la factura que se anula
     *
     * @var string
     */
    private string $FechaExpedicionFacturaAnulada;

    /**
     * @return string
     */
    public function getIDEmisorFacturaAnulada() : string
    {
        return $this->IDEmisorFacturaAnulada;
    }

    /**
     * @param string $IDEmisorFacturaAnulada
     * @return static
     */
    public function withIDEmisorFacturaAnulada(string $IDEmisorFacturaAnulada) : static
    {
        $new = clone $this;
        $new->IDEmisorFacturaAnulada = $IDEmisorFacturaAnulada;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumSerieFacturaAnulada() : string
    {
        return $this->NumSerieFacturaAnulada;
    }

    /**
     * @param string $NumSerieFacturaAnulada
     * @return static
     */
    public function withNumSerieFacturaAnulada(string $NumSerieFacturaAnulada) : static
    {
        $new = clone $this;
        $new->NumSerieFacturaAnulada = $NumSerieFacturaAnulada;

        return $new;
    }

    /**
     * @return string
     */
    public function getFechaExpedicionFacturaAnulada() : string
    {
        return $this->FechaExpedicionFacturaAnulada;
    }

    /**
     * @param string $FechaExpedicionFacturaAnulada
     * @return static
     */
    public function withFechaExpedicionFacturaAnulada(string $FechaExpedicionFacturaAnulada) : static
    {
        $new = clone $this;
        $new->FechaExpedicionFacturaAnulada = $FechaExpedicionFacturaAnulada;

        return $new;
    }
}

