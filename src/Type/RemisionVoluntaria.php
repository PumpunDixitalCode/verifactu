<?php

namespace jdgOpenCode\verifactu\Type;

class RemisionVoluntaria
{
    /**
     * @var null | string
     */
    private ?string $FechaFinVeriFactu = null;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $Incidencia = null;

    /**
     * @return null | string
     */
    public function getFechaFinVeriFactu() : ?string
    {
        return $this->FechaFinVeriFactu;
    }

    /**
     * @param null | string $FechaFinVeriFactu
     * @return static
     */
    public function withFechaFinVeriFactu(?string $FechaFinVeriFactu) : static
    {
        $new = clone $this;
        $new->FechaFinVeriFactu = $FechaFinVeriFactu;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getIncidencia() : ?string
    {
        return $this->Incidencia;
    }

    /**
     * @param null | 'S' | 'N' $Incidencia
     * @return static
     */
    public function withIncidencia(?string $Incidencia) : static
    {
        $new = clone $this;
        $new->Incidencia = $Incidencia;

        return $new;
    }
}

