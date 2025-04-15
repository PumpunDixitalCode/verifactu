<?php

namespace jdgOpenCode\verifactu\Type;

class RegistroRespuestaConsultaRegFacturacionType
{
    /**
     * Datos de identificación de factura
     *
     * @var \jdgOpenCode\verifactu\Type\IDFacturaExpedidaType
     */
    private \jdgOpenCode\verifactu\Type\IDFacturaExpedidaType $IDFactura;

    /**
     * Apunte correspondiente al libro de facturas expedidas.
     *
     * @var \jdgOpenCode\verifactu\Type\RespuestaDatosRegistroFacturacionType
     */
    private \jdgOpenCode\verifactu\Type\RespuestaDatosRegistroFacturacionType $DatosRegistroFacturacion;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\DatosPresentacion2Type
     */
    private ?\jdgOpenCode\verifactu\Type\DatosPresentacion2Type $DatosPresentacion = null;

    /**
     * @var \jdgOpenCode\verifactu\Type\EstadoRegFactuType
     */
    private \jdgOpenCode\verifactu\Type\EstadoRegFactuType $EstadoRegistro;

    /**
     * @return \jdgOpenCode\verifactu\Type\IDFacturaExpedidaType
     */
    public function getIDFactura() : \jdgOpenCode\verifactu\Type\IDFacturaExpedidaType
    {
        return $this->IDFactura;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\IDFacturaExpedidaType $IDFactura
     * @return static
     */
    public function withIDFactura(\jdgOpenCode\verifactu\Type\IDFacturaExpedidaType $IDFactura) : static
    {
        $new = clone $this;
        $new->IDFactura = $IDFactura;

        return $new;
    }

    /**
     * @return \jdgOpenCode\verifactu\Type\RespuestaDatosRegistroFacturacionType
     */
    public function getDatosRegistroFacturacion() : \jdgOpenCode\verifactu\Type\RespuestaDatosRegistroFacturacionType
    {
        return $this->DatosRegistroFacturacion;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\RespuestaDatosRegistroFacturacionType $DatosRegistroFacturacion
     * @return static
     */
    public function withDatosRegistroFacturacion(\jdgOpenCode\verifactu\Type\RespuestaDatosRegistroFacturacionType $DatosRegistroFacturacion) : static
    {
        $new = clone $this;
        $new->DatosRegistroFacturacion = $DatosRegistroFacturacion;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\DatosPresentacion2Type
     */
    public function getDatosPresentacion() : ?\jdgOpenCode\verifactu\Type\DatosPresentacion2Type
    {
        return $this->DatosPresentacion;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\DatosPresentacion2Type $DatosPresentacion
     * @return static
     */
    public function withDatosPresentacion(?\jdgOpenCode\verifactu\Type\DatosPresentacion2Type $DatosPresentacion) : static
    {
        $new = clone $this;
        $new->DatosPresentacion = $DatosPresentacion;

        return $new;
    }

    /**
     * @return \jdgOpenCode\verifactu\Type\EstadoRegFactuType
     */
    public function getEstadoRegistro() : \jdgOpenCode\verifactu\Type\EstadoRegFactuType
    {
        return $this->EstadoRegistro;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\EstadoRegFactuType $EstadoRegistro
     * @return static
     */
    public function withEstadoRegistro(\jdgOpenCode\verifactu\Type\EstadoRegFactuType $EstadoRegistro) : static
    {
        $new = clone $this;
        $new->EstadoRegistro = $EstadoRegistro;

        return $new;
    }
}

