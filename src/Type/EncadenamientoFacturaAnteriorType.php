<?php

namespace jdgOpenCode\verifactu\Type;

class EncadenamientoFacturaAnteriorType
{
    /**
     * NIF del obligado a expedir la factura a que se refiere el registro de facturación anterior
     *
     * @var string
     */
    private string $IDEmisorFactura;

    /**
     * @var string
     */
    private string $NumSerieFactura;

    /**
     * @var string
     */
    private string $FechaExpedicionFactura;

    /**
     * @var string
     */
    private string $Huella;

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

    /**
     * @return string
     */
    public function getHuella() : string
    {
        return $this->Huella;
    }

    /**
     * @param string $Huella
     * @return static
     */
    public function withHuella(string $Huella) : static
    {
        $new = clone $this;
        $new->Huella = $Huella;

        return $new;
    }
}

