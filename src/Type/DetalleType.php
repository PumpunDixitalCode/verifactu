<?php

namespace jdgOpenCode\verifactu\Type;

class DetalleType
{
    /**
     * @var null | '01' | '02' | '03' | '05'
     */
    private ?string $Impuesto = null;

    /**
     * @var null | '01' | '02' | '03' | '04' | '05' | '06' | '07' | '08' | '09' | '10' | '11' | '14' | '15' | '17' | '18' | '19' | '20'
     */
    private ?string $ClaveRegimen = null;

    /**
     * @var null | 'S1' | 'S2' | 'N1' | 'N2'
     */
    private ?string $CalificacionOperacion = null;

    /**
     * @var null | 'E1' | 'E2' | 'E3' | 'E4' | 'E5' | 'E6'
     */
    private ?string $OperacionExenta = null;

    /**
     * @var null | string
     */
    private ?string $TipoImpositivo = null;

    /**
     * @var string
     */
    private string $BaseImponibleOimporteNoSujeto;

    /**
     * @var null | string
     */
    private ?string $BaseImponibleACoste = null;

    /**
     * @var null | string
     */
    private ?string $CuotaRepercutida = null;

    /**
     * @var null | string
     */
    private ?string $TipoRecargoEquivalencia = null;

    /**
     * @var null | string
     */
    private ?string $CuotaRecargoEquivalencia = null;

    /**
     * @return null | '01' | '02' | '03' | '05'
     */
    public function getImpuesto() : ?string
    {
        return $this->Impuesto;
    }

    /**
     * @param null | '01' | '02' | '03' | '05' $Impuesto
     * @return static
     */
    public function withImpuesto(?string $Impuesto) : static
    {
        $new = clone $this;
        $new->Impuesto = $Impuesto;

        return $new;
    }

    /**
     * @return null | '01' | '02' | '03' | '04' | '05' | '06' | '07' | '08' | '09' | '10' | '11' | '14' | '15' | '17' | '18' | '19' | '20'
     */
    public function getClaveRegimen() : ?string
    {
        return $this->ClaveRegimen;
    }

    /**
     * @param null | '01' | '02' | '03' | '04' | '05' | '06' | '07' | '08' | '09' | '10' | '11' | '14' | '15' | '17' | '18' | '19' | '20' $ClaveRegimen
     * @return static
     */
    public function withClaveRegimen(?string $ClaveRegimen) : static
    {
        $new = clone $this;
        $new->ClaveRegimen = $ClaveRegimen;

        return $new;
    }

    /**
     * @return null | 'S1' | 'S2' | 'N1' | 'N2'
     */
    public function getCalificacionOperacion() : ?string
    {
        return $this->CalificacionOperacion;
    }

    /**
     * @param null | 'S1' | 'S2' | 'N1' | 'N2' $CalificacionOperacion
     * @return static
     */
    public function withCalificacionOperacion(?string $CalificacionOperacion) : static
    {
        $new = clone $this;
        $new->CalificacionOperacion = $CalificacionOperacion;

        return $new;
    }

    /**
     * @return null | 'E1' | 'E2' | 'E3' | 'E4' | 'E5' | 'E6'
     */
    public function getOperacionExenta() : ?string
    {
        return $this->OperacionExenta;
    }

    /**
     * @param null | 'E1' | 'E2' | 'E3' | 'E4' | 'E5' | 'E6' $OperacionExenta
     * @return static
     */
    public function withOperacionExenta(?string $OperacionExenta) : static
    {
        $new = clone $this;
        $new->OperacionExenta = $OperacionExenta;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTipoImpositivo() : ?string
    {
        return $this->TipoImpositivo;
    }

    /**
     * @param null | string $TipoImpositivo
     * @return static
     */
    public function withTipoImpositivo(?string $TipoImpositivo) : static
    {
        $new = clone $this;
        $new->TipoImpositivo = $TipoImpositivo;

        return $new;
    }

    /**
     * @return string
     */
    public function getBaseImponibleOimporteNoSujeto() : string
    {
        return $this->BaseImponibleOimporteNoSujeto;
    }

    /**
     * @param string $BaseImponibleOimporteNoSujeto
     * @return static
     */
    public function withBaseImponibleOimporteNoSujeto(string $BaseImponibleOimporteNoSujeto) : static
    {
        $new = clone $this;
        $new->BaseImponibleOimporteNoSujeto = $BaseImponibleOimporteNoSujeto;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBaseImponibleACoste() : ?string
    {
        return $this->BaseImponibleACoste;
    }

    /**
     * @param null | string $BaseImponibleACoste
     * @return static
     */
    public function withBaseImponibleACoste(?string $BaseImponibleACoste) : static
    {
        $new = clone $this;
        $new->BaseImponibleACoste = $BaseImponibleACoste;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCuotaRepercutida() : ?string
    {
        return $this->CuotaRepercutida;
    }

    /**
     * @param null | string $CuotaRepercutida
     * @return static
     */
    public function withCuotaRepercutida(?string $CuotaRepercutida) : static
    {
        $new = clone $this;
        $new->CuotaRepercutida = $CuotaRepercutida;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTipoRecargoEquivalencia() : ?string
    {
        return $this->TipoRecargoEquivalencia;
    }

    /**
     * @param null | string $TipoRecargoEquivalencia
     * @return static
     */
    public function withTipoRecargoEquivalencia(?string $TipoRecargoEquivalencia) : static
    {
        $new = clone $this;
        $new->TipoRecargoEquivalencia = $TipoRecargoEquivalencia;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCuotaRecargoEquivalencia() : ?string
    {
        return $this->CuotaRecargoEquivalencia;
    }

    /**
     * @param null | string $CuotaRecargoEquivalencia
     * @return static
     */
    public function withCuotaRecargoEquivalencia(?string $CuotaRecargoEquivalencia) : static
    {
        $new = clone $this;
        $new->CuotaRecargoEquivalencia = $CuotaRecargoEquivalencia;

        return $new;
    }
}

