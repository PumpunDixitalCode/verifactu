<?php

namespace jdgOpenCode\verifactu\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RegFactuSistemaFacturacion implements RequestInterface
{
    /**
     * Datos de cabecera
     *
     * @var \jdgOpenCode\verifactu\Type\CabeceraType
     */
    private \jdgOpenCode\verifactu\Type\CabeceraType $Cabecera;

    /**
     * Datos correspondientes a los registros de facturacion
     *
     * @var non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\RegistroFacturaType>
     */
    private array $RegistroFactura;

    /**
     * Constructor
     *
     * @param \jdgOpenCode\verifactu\Type\CabeceraType $Cabecera
     * @param non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\RegistroFacturaType> $RegistroFactura
     */
    public function __construct(\jdgOpenCode\verifactu\Type\CabeceraType $Cabecera, array $RegistroFactura)
    {
        $this->Cabecera = $Cabecera;
        $this->RegistroFactura = $RegistroFactura;
    }

    /**
     * @return \jdgOpenCode\verifactu\Type\CabeceraType
     */
    public function getCabecera() : \jdgOpenCode\verifactu\Type\CabeceraType
    {
        return $this->Cabecera;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\CabeceraType $Cabecera
     * @return static
     */
    public function withCabecera(\jdgOpenCode\verifactu\Type\CabeceraType $Cabecera) : static
    {
        $new = clone $this;
        $new->Cabecera = $Cabecera;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\RegistroFacturaType>
     */
    public function getRegistroFactura() : array
    {
        return $this->RegistroFactura;
    }

    /**
     * @param non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\RegistroFacturaType> $RegistroFactura
     * @return static
     */
    public function withRegistroFactura(array $RegistroFactura) : static
    {
        $new = clone $this;
        $new->RegistroFactura = $RegistroFactura;

        return $new;
    }
}

