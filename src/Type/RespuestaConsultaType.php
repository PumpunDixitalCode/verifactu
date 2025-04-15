<?php

namespace jdgOpenCode\verifactu\Type;

class RespuestaConsultaType
{
    /**
     * Cabecera de la Cobnsulta
     *
     * @var \jdgOpenCode\verifactu\Type\CabeceraConsultaSf
     */
    private \jdgOpenCode\verifactu\Type\CabeceraConsultaSf $Cabecera;

    /**
     * Período al que corresponden los apuntes. todos los apuntes deben corresponder al mismo período impositivo
     *
     * @var \jdgOpenCode\verifactu\Type\PeriodoImputacion
     */
    private \jdgOpenCode\verifactu\Type\PeriodoImputacion $PeriodoImputacion;

    /**
     * @var 'S' | 'N'
     */
    private string $IndicadorPaginacion;

    /**
     * @var 'ConDatos' | 'SinDatos'
     */
    private string $ResultadoConsulta;

    /**
     * @return \jdgOpenCode\verifactu\Type\CabeceraConsultaSf
     */
    public function getCabecera() : \jdgOpenCode\verifactu\Type\CabeceraConsultaSf
    {
        return $this->Cabecera;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\CabeceraConsultaSf $Cabecera
     * @return static
     */
    public function withCabecera(\jdgOpenCode\verifactu\Type\CabeceraConsultaSf $Cabecera) : static
    {
        $new = clone $this;
        $new->Cabecera = $Cabecera;

        return $new;
    }

    /**
     * @return \jdgOpenCode\verifactu\Type\PeriodoImputacion
     */
    public function getPeriodoImputacion() : \jdgOpenCode\verifactu\Type\PeriodoImputacion
    {
        return $this->PeriodoImputacion;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\PeriodoImputacion $PeriodoImputacion
     * @return static
     */
    public function withPeriodoImputacion(\jdgOpenCode\verifactu\Type\PeriodoImputacion $PeriodoImputacion) : static
    {
        $new = clone $this;
        $new->PeriodoImputacion = $PeriodoImputacion;

        return $new;
    }

    /**
     * @return 'S' | 'N'
     */
    public function getIndicadorPaginacion() : string
    {
        return $this->IndicadorPaginacion;
    }

    /**
     * @param 'S' | 'N' $IndicadorPaginacion
     * @return static
     */
    public function withIndicadorPaginacion(string $IndicadorPaginacion) : static
    {
        $new = clone $this;
        $new->IndicadorPaginacion = $IndicadorPaginacion;

        return $new;
    }

    /**
     * @return 'ConDatos' | 'SinDatos'
     */
    public function getResultadoConsulta() : string
    {
        return $this->ResultadoConsulta;
    }

    /**
     * @param 'ConDatos' | 'SinDatos' $ResultadoConsulta
     * @return static
     */
    public function withResultadoConsulta(string $ResultadoConsulta) : static
    {
        $new = clone $this;
        $new->ResultadoConsulta = $ResultadoConsulta;

        return $new;
    }
}

