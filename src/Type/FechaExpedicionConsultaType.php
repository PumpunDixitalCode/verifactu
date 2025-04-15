<?php

namespace jdgOpenCode\verifactu\Type;

class FechaExpedicionConsultaType
{
    /**
     * @var null | string
     */
    private ?string $FechaExpedicionFactura = null;

    /**
     * Rango de fechas de expedicion
     *
     * @var null | \jdgOpenCode\verifactu\Type\RangoFechaExpedicionType
     */
    private ?\jdgOpenCode\verifactu\Type\RangoFechaExpedicionType $RangoFechaExpedicion = null;

    /**
     * @return null | string
     */
    public function getFechaExpedicionFactura() : ?string
    {
        return $this->FechaExpedicionFactura;
    }

    /**
     * @param null | string $FechaExpedicionFactura
     * @return static
     */
    public function withFechaExpedicionFactura(?string $FechaExpedicionFactura) : static
    {
        $new = clone $this;
        $new->FechaExpedicionFactura = $FechaExpedicionFactura;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\RangoFechaExpedicionType
     */
    public function getRangoFechaExpedicion() : ?\jdgOpenCode\verifactu\Type\RangoFechaExpedicionType
    {
        return $this->RangoFechaExpedicion;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\RangoFechaExpedicionType $RangoFechaExpedicion
     * @return static
     */
    public function withRangoFechaExpedicion(?\jdgOpenCode\verifactu\Type\RangoFechaExpedicionType $RangoFechaExpedicion) : static
    {
        $new = clone $this;
        $new->RangoFechaExpedicion = $RangoFechaExpedicion;

        return $new;
    }
}

