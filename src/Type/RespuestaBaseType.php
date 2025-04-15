<?php

namespace jdgOpenCode\verifactu\Type;

class RespuestaBaseType
{
    /**
     * CSV asociado al envío generado por AEAT. Solo se genera si no hay rechazo del envio
     *
     * @var null | string
     */
    private ?string $CSV = null;

    /**
     * Se devuelven datos de la presentacion realizada. Solo se genera si no hay rechazo del envio
     *
     * @var null | \jdgOpenCode\verifactu\Type\DatosPresentacionType
     */
    private ?\jdgOpenCode\verifactu\Type\DatosPresentacionType $DatosPresentacion = null;

    /**
     * Se devuelve la cabecera que se incluyó en el envío.
     *
     * @var \jdgOpenCode\verifactu\Type\CabeceraType
     */
    private \jdgOpenCode\verifactu\Type\CabeceraType $Cabecera;

    /**
     * @var string
     */
    private string $TiempoEsperaEnvio;

    /**
     * Estado del envío en conjunto. 
     *  Si los datos de cabecera y todos los registros son correctos,el estado es correcto. 
     *  En caso de estructura y cabecera correctos donde todos los registros son incorrectos, el estado es incorrecto
     *  En caso de estructura y cabecera correctos con al menos un registro incorrecto, el estado global es parcialmente correcto.
     *
     * @var 'Correcto' | 'ParcialmenteCorrecto' | 'Incorrecto'
     */
    private string $EstadoEnvio;

    /**
     * @return null | string
     */
    public function getCSV() : ?string
    {
        return $this->CSV;
    }

    /**
     * @param null | string $CSV
     * @return static
     */
    public function withCSV(?string $CSV) : static
    {
        $new = clone $this;
        $new->CSV = $CSV;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\DatosPresentacionType
     */
    public function getDatosPresentacion() : ?\jdgOpenCode\verifactu\Type\DatosPresentacionType
    {
        return $this->DatosPresentacion;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\DatosPresentacionType $DatosPresentacion
     * @return static
     */
    public function withDatosPresentacion(?\jdgOpenCode\verifactu\Type\DatosPresentacionType $DatosPresentacion) : static
    {
        $new = clone $this;
        $new->DatosPresentacion = $DatosPresentacion;

        return $new;
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
     * @return string
     */
    public function getTiempoEsperaEnvio() : string
    {
        return $this->TiempoEsperaEnvio;
    }

    /**
     * @param string $TiempoEsperaEnvio
     * @return static
     */
    public function withTiempoEsperaEnvio(string $TiempoEsperaEnvio) : static
    {
        $new = clone $this;
        $new->TiempoEsperaEnvio = $TiempoEsperaEnvio;

        return $new;
    }

    /**
     * @return 'Correcto' | 'ParcialmenteCorrecto' | 'Incorrecto'
     */
    public function getEstadoEnvio() : string
    {
        return $this->EstadoEnvio;
    }

    /**
     * @param 'Correcto' | 'ParcialmenteCorrecto' | 'Incorrecto' $EstadoEnvio
     * @return static
     */
    public function withEstadoEnvio(string $EstadoEnvio) : static
    {
        $new = clone $this;
        $new->EstadoEnvio = $EstadoEnvio;

        return $new;
    }
}

