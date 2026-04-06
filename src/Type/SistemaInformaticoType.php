<?php

namespace jdgOpenCode\verifactu\Type;

class SistemaInformaticoType
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
     * @var string
     */
    private string $NombreSistemaInformatico;

    /**
     * @var string
     */
    private string $IdSistemaInformatico;

    /**
     * @var string
     */
    private string $Version;

    /**
     * @var string
     */
    private string $NumeroInstalacion;

    /**
     * @var 'S' | 'N'
     */
    private string $TipoUsoPosibleSoloVerifactu;

    /**
     * @var 'S' | 'N'
     */
    private string $TipoUsoPosibleMultiOT;

    /**
     * @var 'S' | 'N'
     */
    private string $IndicadorMultiplesOT;

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

    /**
     * @return string
     */
    public function getNombreSistemaInformatico() : string
    {
        return $this->NombreSistemaInformatico;
    }

    /**
     * @param string $NombreSistemaInformatico
     * @return static
     */
    public function withNombreSistemaInformatico(string $NombreSistemaInformatico) : static
    {
        $new = clone $this;
        $new->NombreSistemaInformatico = $NombreSistemaInformatico;

        return $new;
    }

    /**
     * @return string
     */
    public function getIdSistemaInformatico() : string
    {
        return $this->IdSistemaInformatico;
    }

    /**
     * @param string $IdSistemaInformatico
     * @return static
     */
    public function withIdSistemaInformatico(string $IdSistemaInformatico) : static
    {
        $new = clone $this;
        $new->IdSistemaInformatico = $IdSistemaInformatico;

        return $new;
    }

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     * @return static
     */
    public function withVersion(string $Version) : static
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroInstalacion() : string
    {
        return $this->NumeroInstalacion;
    }

    /**
     * @param string $NumeroInstalacion
     * @return static
     */
    public function withNumeroInstalacion(string $NumeroInstalacion) : static
    {
        $new = clone $this;
        $new->NumeroInstalacion = $NumeroInstalacion;

        return $new;
    }

    /**
     * @return 'S' | 'N'
     */
    public function getTipoUsoPosibleSoloVerifactu() : string
    {
        return $this->TipoUsoPosibleSoloVerifactu;
    }

    /**
     * @param 'S' | 'N' $TipoUsoPosibleSoloVerifactu
     * @return static
     */
    public function withTipoUsoPosibleSoloVerifactu(string $TipoUsoPosibleSoloVerifactu) : static
    {
        $new = clone $this;
        $new->TipoUsoPosibleSoloVerifactu = $TipoUsoPosibleSoloVerifactu;

        return $new;
    }

    /**
     * @return 'S' | 'N'
     */
    public function getTipoUsoPosibleMultiOT() : string
    {
        return $this->TipoUsoPosibleMultiOT;
    }

    /**
     * @param 'S' | 'N' $TipoUsoPosibleMultiOT
     * @return static
     */
    public function withTipoUsoPosibleMultiOT(string $TipoUsoPosibleMultiOT) : static
    {
        $new = clone $this;
        $new->TipoUsoPosibleMultiOT = $TipoUsoPosibleMultiOT;

        return $new;
    }

    /**
     * @return 'S' | 'N'
     */
    public function getIndicadorMultiplesOT() : string
    {
        return $this->IndicadorMultiplesOT;
    }

    /**
     * @param 'S' | 'N' $IndicadorMultiplesOT
     * @return static
     */
    public function withIndicadorMultiplesOT(string $IndicadorMultiplesOT) : static
    {
        $new = clone $this;
        $new->IndicadorMultiplesOT = $IndicadorMultiplesOT;

        return $new;
    }
}

