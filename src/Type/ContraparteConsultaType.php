<?php

namespace jdgOpenCode\verifactu\Type;

class ContraparteConsultaType
{
    /**
     * @var string
     */
    private string $NombreRazon;

    /**
     * NIF
     *
     * @var null | string
     */
    private ?string $NIF = null;

    /**
     * Identificador de persona Física o jurídica distinto del NIF 
     *  (Código pais, Tipo de Identificador, y hasta 15 caractéres)
     *  No se permite CodigoPais=ES e IDType=01-NIFContraparte
     *  para ese caso, debe utilizarse NIF en lugar de IDOtro.
     *
     * @var null | \jdgOpenCode\verifactu\Type\IDOtroType
     */
    private ?\jdgOpenCode\verifactu\Type\IDOtroType $IDOtro = null;

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
     * @return null | string
     */
    public function getNIF() : ?string
    {
        return $this->NIF;
    }

    /**
     * @param null | string $NIF
     * @return static
     */
    public function withNIF(?string $NIF) : static
    {
        $new = clone $this;
        $new->NIF = $NIF;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\IDOtroType
     */
    public function getIDOtro() : ?\jdgOpenCode\verifactu\Type\IDOtroType
    {
        return $this->IDOtro;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\IDOtroType $IDOtro
     * @return static
     */
    public function withIDOtro(?\jdgOpenCode\verifactu\Type\IDOtroType $IDOtro) : static
    {
        $new = clone $this;
        $new->IDOtro = $IDOtro;

        return $new;
    }
}

