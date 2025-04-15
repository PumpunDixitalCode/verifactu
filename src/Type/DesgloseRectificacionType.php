<?php

namespace jdgOpenCode\verifactu\Type;

class DesgloseRectificacionType
{
    /**
     * @var string
     */
    private string $BaseRectificada;

    /**
     * @var string
     */
    private string $CuotaRectificada;

    /**
     * @var null | string
     */
    private ?string $CuotaRecargoRectificado = null;

    /**
     * @return string
     */
    public function getBaseRectificada() : string
    {
        return $this->BaseRectificada;
    }

    /**
     * @param string $BaseRectificada
     * @return static
     */
    public function withBaseRectificada(string $BaseRectificada) : static
    {
        $new = clone $this;
        $new->BaseRectificada = $BaseRectificada;

        return $new;
    }

    /**
     * @return string
     */
    public function getCuotaRectificada() : string
    {
        return $this->CuotaRectificada;
    }

    /**
     * @param string $CuotaRectificada
     * @return static
     */
    public function withCuotaRectificada(string $CuotaRectificada) : static
    {
        $new = clone $this;
        $new->CuotaRectificada = $CuotaRectificada;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCuotaRecargoRectificado() : ?string
    {
        return $this->CuotaRecargoRectificado;
    }

    /**
     * @param null | string $CuotaRecargoRectificado
     * @return static
     */
    public function withCuotaRecargoRectificado(?string $CuotaRecargoRectificado) : static
    {
        $new = clone $this;
        $new->CuotaRecargoRectificado = $CuotaRecargoRectificado;

        return $new;
    }
}

