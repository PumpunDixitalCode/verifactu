<?php

namespace jdgOpenCode\verifactu\Type;

class OperacionType
{
    /**
     * @var 'Alta' | 'Anulacion'
     */
    private string $TipoOperacion;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $Subsanacion = null;

    /**
     * @var null | 'N' | 'S' | 'X'
     */
    private ?string $RechazoPrevio = null;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $SinRegistroPrevio = null;

    /**
     * @return 'Alta' | 'Anulacion'
     */
    public function getTipoOperacion() : string
    {
        return $this->TipoOperacion;
    }

    /**
     * @param 'Alta' | 'Anulacion' $TipoOperacion
     * @return static
     */
    public function withTipoOperacion(string $TipoOperacion) : static
    {
        $new = clone $this;
        $new->TipoOperacion = $TipoOperacion;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getSubsanacion() : ?string
    {
        return $this->Subsanacion;
    }

    /**
     * @param null | 'S' | 'N' $Subsanacion
     * @return static
     */
    public function withSubsanacion(?string $Subsanacion) : static
    {
        $new = clone $this;
        $new->Subsanacion = $Subsanacion;

        return $new;
    }

    /**
     * @return null | 'N' | 'S' | 'X'
     */
    public function getRechazoPrevio() : ?string
    {
        return $this->RechazoPrevio;
    }

    /**
     * @param null | 'N' | 'S' | 'X' $RechazoPrevio
     * @return static
     */
    public function withRechazoPrevio(?string $RechazoPrevio) : static
    {
        $new = clone $this;
        $new->RechazoPrevio = $RechazoPrevio;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getSinRegistroPrevio() : ?string
    {
        return $this->SinRegistroPrevio;
    }

    /**
     * @param null | 'S' | 'N' $SinRegistroPrevio
     * @return static
     */
    public function withSinRegistroPrevio(?string $SinRegistroPrevio) : static
    {
        $new = clone $this;
        $new->SinRegistroPrevio = $SinRegistroPrevio;

        return $new;
    }
}

