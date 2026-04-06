<?php

namespace jdgOpenCode\verifactu\Type;

class RangoFechaExpedicionType
{
    /**
     * @var null | string
     */
    private ?string $Desde = null;

    /**
     * @var null | string
     */
    private ?string $Hasta = null;

    /**
     * @return null | string
     */
    public function getDesde() : ?string
    {
        return $this->Desde;
    }

    /**
     * @param null | string $Desde
     * @return static
     */
    public function withDesde(?string $Desde) : static
    {
        $new = clone $this;
        $new->Desde = $Desde;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHasta() : ?string
    {
        return $this->Hasta;
    }

    /**
     * @param null | string $Hasta
     * @return static
     */
    public function withHasta(?string $Hasta) : static
    {
        $new = clone $this;
        $new->Hasta = $Hasta;

        return $new;
    }
}

