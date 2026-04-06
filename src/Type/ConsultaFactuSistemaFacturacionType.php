<?php

namespace jdgOpenCode\verifactu\Type;

class ConsultaFactuSistemaFacturacionType
{
    /**
     * Cabecera de la Cobnsulta
     *
     * @var \jdgOpenCode\verifactu\Type\CabeceraConsultaSf
     */
    private \jdgOpenCode\verifactu\Type\CabeceraConsultaSf $Cabecera;

    /**
     * @var \jdgOpenCode\verifactu\Type\LRFiltroRegFacturacionType
     */
    private \jdgOpenCode\verifactu\Type\LRFiltroRegFacturacionType $FiltroConsulta;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\DatosAdicionalesRespuestaType
     */
    private ?\jdgOpenCode\verifactu\Type\DatosAdicionalesRespuestaType $DatosAdicionalesRespuesta = null;

    /**
     * @return \jdgOpenCode\verifactu\Type\CabeceraConsultaSf
     */
    public function getCabecera() : \jdgOpenCode\verifactu\Type\CabeceraConsultaSf
    {
        return $this->Cabecera;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\CabeceraConsultaSf $Cabecera
     * @return static
     */
    public function withCabecera(\jdgOpenCode\verifactu\Type\CabeceraConsultaSf $Cabecera) : static
    {
        $new = clone $this;
        $new->Cabecera = $Cabecera;

        return $new;
    }

    /**
     * @return \jdgOpenCode\verifactu\Type\LRFiltroRegFacturacionType
     */
    public function getFiltroConsulta() : \jdgOpenCode\verifactu\Type\LRFiltroRegFacturacionType
    {
        return $this->FiltroConsulta;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\LRFiltroRegFacturacionType $FiltroConsulta
     * @return static
     */
    public function withFiltroConsulta(\jdgOpenCode\verifactu\Type\LRFiltroRegFacturacionType $FiltroConsulta) : static
    {
        $new = clone $this;
        $new->FiltroConsulta = $FiltroConsulta;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\DatosAdicionalesRespuestaType
     */
    public function getDatosAdicionalesRespuesta() : ?\jdgOpenCode\verifactu\Type\DatosAdicionalesRespuestaType
    {
        return $this->DatosAdicionalesRespuesta;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\DatosAdicionalesRespuestaType $DatosAdicionalesRespuesta
     * @return static
     */
    public function withDatosAdicionalesRespuesta(?\jdgOpenCode\verifactu\Type\DatosAdicionalesRespuestaType $DatosAdicionalesRespuesta) : static
    {
        $new = clone $this;
        $new->DatosAdicionalesRespuesta = $DatosAdicionalesRespuesta;

        return $new;
    }
}

