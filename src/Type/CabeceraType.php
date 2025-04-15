<?php

namespace jdgOpenCode\verifactu\Type;

class CabeceraType
{
    /**
     * Obligado a expedir la factura.
     *
     * @var \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType
     */
    private \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType $ObligadoEmision;

    /**
     * Representante del obligado tributario. A rellenar solo en caso de que los registros de facturación remitdos hayan sido generados por un representante/asesor del obligado tributario.
     *
     * @var null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType
     */
    private ?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType $Representante = null;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\RemisionVoluntaria
     */
    private ?\jdgOpenCode\verifactu\Type\RemisionVoluntaria $RemisionVoluntaria = null;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\RemisionRequerimiento
     */
    private ?\jdgOpenCode\verifactu\Type\RemisionRequerimiento $RemisionRequerimiento = null;

    /**
     * @return \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType
     */
    public function getObligadoEmision() : \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType
    {
        return $this->ObligadoEmision;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType $ObligadoEmision
     * @return static
     */
    public function withObligadoEmision(\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType $ObligadoEmision) : static
    {
        $new = clone $this;
        $new->ObligadoEmision = $ObligadoEmision;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType
     */
    public function getRepresentante() : ?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType
    {
        return $this->Representante;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType $Representante
     * @return static
     */
    public function withRepresentante(?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType $Representante) : static
    {
        $new = clone $this;
        $new->Representante = $Representante;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\RemisionVoluntaria
     */
    public function getRemisionVoluntaria() : ?\jdgOpenCode\verifactu\Type\RemisionVoluntaria
    {
        return $this->RemisionVoluntaria;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\RemisionVoluntaria $RemisionVoluntaria
     * @return static
     */
    public function withRemisionVoluntaria(?\jdgOpenCode\verifactu\Type\RemisionVoluntaria $RemisionVoluntaria) : static
    {
        $new = clone $this;
        $new->RemisionVoluntaria = $RemisionVoluntaria;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\RemisionRequerimiento
     */
    public function getRemisionRequerimiento() : ?\jdgOpenCode\verifactu\Type\RemisionRequerimiento
    {
        return $this->RemisionRequerimiento;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\RemisionRequerimiento $RemisionRequerimiento
     * @return static
     */
    public function withRemisionRequerimiento(?\jdgOpenCode\verifactu\Type\RemisionRequerimiento $RemisionRequerimiento) : static
    {
        $new = clone $this;
        $new->RemisionRequerimiento = $RemisionRequerimiento;

        return $new;
    }
}

