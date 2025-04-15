<?php

namespace jdgOpenCode\verifactu\Type;

class Encadenamiento
{
    /**
     * @var null | 'S'
     */
    private ?string $PrimerRegistro = null;

    /**
     * Datos de encadenamiento
     *
     * @var null | \jdgOpenCode\verifactu\Type\EncadenamientoFacturaAnteriorType
     */
    private ?\jdgOpenCode\verifactu\Type\EncadenamientoFacturaAnteriorType $RegistroAnterior = null;

    /**
     * @return null | 'S'
     */
    public function getPrimerRegistro() : ?string
    {
        return $this->PrimerRegistro;
    }

    /**
     * @param null | 'S' $PrimerRegistro
     * @return static
     */
    public function withPrimerRegistro(?string $PrimerRegistro) : static
    {
        $new = clone $this;
        $new->PrimerRegistro = $PrimerRegistro;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\EncadenamientoFacturaAnteriorType
     */
    public function getRegistroAnterior() : ?\jdgOpenCode\verifactu\Type\EncadenamientoFacturaAnteriorType
    {
        return $this->RegistroAnterior;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\EncadenamientoFacturaAnteriorType $RegistroAnterior
     * @return static
     */
    public function withRegistroAnterior(?\jdgOpenCode\verifactu\Type\EncadenamientoFacturaAnteriorType $RegistroAnterior) : static
    {
        $new = clone $this;
        $new->RegistroAnterior = $RegistroAnterior;

        return $new;
    }
}

