<?php

namespace jdgOpenCode\verifactu\Type;

class RegistroFacturaType
{
    /**
     * Datos correspondientes al registro de facturacion de alta
     *
     * @var null | \jdgOpenCode\verifactu\Type\RegistroFacturacionAltaType
     */
    private ?\jdgOpenCode\verifactu\Type\RegistroFacturacionAltaType $RegistroAlta = null;

    /**
     * Datos correspondientes al registro de facturacion de anulacion
     *
     * @var null | \jdgOpenCode\verifactu\Type\RegistroFacturacionAnulacionType
     */
    private ?\jdgOpenCode\verifactu\Type\RegistroFacturacionAnulacionType $RegistroAnulacion = null;

    /**
     * @return null | \jdgOpenCode\verifactu\Type\RegistroFacturacionAltaType
     */
    public function getRegistroAlta() : ?\jdgOpenCode\verifactu\Type\RegistroFacturacionAltaType
    {
        return $this->RegistroAlta;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\RegistroFacturacionAltaType $RegistroAlta
     * @return static
     */
    public function withRegistroAlta(?\jdgOpenCode\verifactu\Type\RegistroFacturacionAltaType $RegistroAlta) : static
    {
        $new = clone $this;
        $new->RegistroAlta = $RegistroAlta;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\RegistroFacturacionAnulacionType
     */
    public function getRegistroAnulacion() : ?\jdgOpenCode\verifactu\Type\RegistroFacturacionAnulacionType
    {
        return $this->RegistroAnulacion;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\RegistroFacturacionAnulacionType $RegistroAnulacion
     * @return static
     */
    public function withRegistroAnulacion(?\jdgOpenCode\verifactu\Type\RegistroFacturacionAnulacionType $RegistroAnulacion) : static
    {
        $new = clone $this;
        $new->RegistroAnulacion = $RegistroAnulacion;

        return $new;
    }
}

