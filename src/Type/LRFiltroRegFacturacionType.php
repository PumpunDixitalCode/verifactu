<?php

namespace jdgOpenCode\verifactu\Type;

class LRFiltroRegFacturacionType
{
    /**
     * @var \jdgOpenCode\verifactu\Type\PeriodoImputacionType
     */
    private \jdgOpenCode\verifactu\Type\PeriodoImputacionType $PeriodoImputacion;

    /**
     * Nº Serie+Nº Factura de la Factura del Emisor.
     *
     * @var null | string
     */
    private ?string $NumSerieFactura = null;

    /**
     * Contraparte del NIF de la cabecera que realiza la consulta. 
     *  Obligado si la cosulta la realiza el Destinatario de los registros de facturacion.
     *  Destinatario si la cosulta la realiza el Obligado dde los registros de facturacion.
     *
     * @var null | \jdgOpenCode\verifactu\Type\ContraparteConsultaType
     */
    private ?\jdgOpenCode\verifactu\Type\ContraparteConsultaType $Contraparte = null;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\FechaExpedicionConsultaType
     */
    private ?\jdgOpenCode\verifactu\Type\FechaExpedicionConsultaType $FechaExpedicionFactura = null;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\SistemaInformaticoType
     */
    private ?\jdgOpenCode\verifactu\Type\SistemaInformaticoType $SistemaInformatico = null;

    /**
     * @var null | string
     */
    private ?string $RefExterna = null;

    /**
     * Datos de identificación de factura expedida para operaciones de consulta
     *
     * @var null | \jdgOpenCode\verifactu\Type\IDFacturaExpedidaBCType
     */
    private ?\jdgOpenCode\verifactu\Type\IDFacturaExpedidaBCType $ClavePaginacion = null;

    /**
     * @return \jdgOpenCode\verifactu\Type\PeriodoImputacionType
     */
    public function getPeriodoImputacion() : \jdgOpenCode\verifactu\Type\PeriodoImputacionType
    {
        return $this->PeriodoImputacion;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\PeriodoImputacionType $PeriodoImputacion
     * @return static
     */
    public function withPeriodoImputacion(\jdgOpenCode\verifactu\Type\PeriodoImputacionType $PeriodoImputacion) : static
    {
        $new = clone $this;
        $new->PeriodoImputacion = $PeriodoImputacion;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumSerieFactura() : ?string
    {
        return $this->NumSerieFactura;
    }

    /**
     * @param null | string $NumSerieFactura
     * @return static
     */
    public function withNumSerieFactura(?string $NumSerieFactura) : static
    {
        $new = clone $this;
        $new->NumSerieFactura = $NumSerieFactura;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\ContraparteConsultaType
     */
    public function getContraparte() : ?\jdgOpenCode\verifactu\Type\ContraparteConsultaType
    {
        return $this->Contraparte;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\ContraparteConsultaType $Contraparte
     * @return static
     */
    public function withContraparte(?\jdgOpenCode\verifactu\Type\ContraparteConsultaType $Contraparte) : static
    {
        $new = clone $this;
        $new->Contraparte = $Contraparte;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\FechaExpedicionConsultaType
     */
    public function getFechaExpedicionFactura() : ?\jdgOpenCode\verifactu\Type\FechaExpedicionConsultaType
    {
        return $this->FechaExpedicionFactura;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\FechaExpedicionConsultaType $FechaExpedicionFactura
     * @return static
     */
    public function withFechaExpedicionFactura(?\jdgOpenCode\verifactu\Type\FechaExpedicionConsultaType $FechaExpedicionFactura) : static
    {
        $new = clone $this;
        $new->FechaExpedicionFactura = $FechaExpedicionFactura;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\SistemaInformaticoType
     */
    public function getSistemaInformatico() : ?\jdgOpenCode\verifactu\Type\SistemaInformaticoType
    {
        return $this->SistemaInformatico;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\SistemaInformaticoType $SistemaInformatico
     * @return static
     */
    public function withSistemaInformatico(?\jdgOpenCode\verifactu\Type\SistemaInformaticoType $SistemaInformatico) : static
    {
        $new = clone $this;
        $new->SistemaInformatico = $SistemaInformatico;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRefExterna() : ?string
    {
        return $this->RefExterna;
    }

    /**
     * @param null | string $RefExterna
     * @return static
     */
    public function withRefExterna(?string $RefExterna) : static
    {
        $new = clone $this;
        $new->RefExterna = $RefExterna;

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

