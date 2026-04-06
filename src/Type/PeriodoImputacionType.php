<?php

namespace jdgOpenCode\verifactu\Type;

class PeriodoImputacionType
{
    /**
     * Año en formato YYYY
     *
     * @var string
     */
    private string $Ejercicio;

    /**
     * Período de la factura
     *
     * @var '01' | '02' | '03' | '04' | '05' | '06' | '07' | '08' | '09' | '10' | '11' | '12'
     */
    private string $Periodo;

    /**
     * @return string
     */
    public function getEjercicio() : string
    {
        return $this->Ejercicio;
    }

    /**
     * @param string $Ejercicio
     * @return static
     */
    public function withEjercicio(string $Ejercicio) : static
    {
        $new = clone $this;
        $new->Ejercicio = $Ejercicio;

        return $new;
    }

    /**
     * @return '01' | '02' | '03' | '04' | '05' | '06' | '07' | '08' | '09' | '10' | '11' | '12'
     */
    public function getPeriodo() : string
    {
        return $this->Periodo;
    }

    /**
     * @param '01' | '02' | '03' | '04' | '05' | '06' | '07' | '08' | '09' | '10' | '11' | '12' $Periodo
     * @return static
     */
    public function withPeriodo(string $Periodo) : static
    {
        $new = clone $this;
        $new->Periodo = $Periodo;

        return $new;
    }
}

