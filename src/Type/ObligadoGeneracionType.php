<?php

namespace jdgOpenCode\verifactu\Type;

class ObligadoGeneracionType
{
    /**
     * @var string
     */
    private string $NombreRazon;

    /**
     * NIF
     *
     * @var string
     */
    private string $NIF;

    /**
     * @return string
     */
    public function getNombreRazon() : string
    {
        return $this->NombreRazon;
    }

    /**
     * @param string $NombreRazon
     * @return static
     */
    public function withNombreRazon(string $NombreRazon) : static
    {
        $new = clone $this;
        $new->NombreRazon = $NombreRazon;

        return $new;
    }

    /**
     * @return string
     */
    public function getNIF() : string
    {
        return $this->NIF;
    }

    /**
     * @param string $NIF
     * @return static
     */
    public function withNIF(string $NIF) : static
    {
        $new = clone $this;
        $new->NIF = $NIF;

        return $new;
    }
}

