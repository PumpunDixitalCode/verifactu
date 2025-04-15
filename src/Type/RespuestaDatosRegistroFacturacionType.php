<?php

namespace jdgOpenCode\verifactu\Type;

class RespuestaDatosRegistroFacturacionType
{
    /**
     * Solo se informa el campo NombreRazonEmisor si se realiza la consulta con valor S en el campo MostrarNombreRazonEmisor
     *
     * @var null | string
     */
    private ?string $NombreRazonEmisor = null;

    /**
     * @var null | string
     */
    private ?string $RefExterna = null;

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
     * @var null | 'E' | 'D' | 'T'
     */
    private ?string $GeneradoPor = null;

    /**
     * Datos de una persona física o jurídica Española o Extranjera
     *
     * @var null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType
     */
    private ?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType $Generador = null;

    /**
     * Clave del tipo de factura
     *
     * @var null | 'F1' | 'F2' | 'R1' | 'R2' | 'R3' | 'R4' | 'R5' | 'F3'
     */
    private ?string $TipoFactura = null;

    /**
     * Identifica si el tipo de factura rectificativa es por sustitución o por diferencia
     *
     * @var null | 'S' | 'I'
     */
    private ?string $TipoRectificativa = null;

    /**
     * El ID de las facturas rectificadas, únicamente se rellena en el caso de rectificación de facturas
     *
     * @var null | \jdgOpenCode\verifactu\Type\FacturasRectificadas
     */
    private ?\jdgOpenCode\verifactu\Type\FacturasRectificadas $FacturasRectificadas = null;

    /**
     * El ID de las facturas sustituidas, únicamente se rellena en el caso de facturas sustituidas
     *
     * @var null | \jdgOpenCode\verifactu\Type\FacturasSustituidas
     */
    private ?\jdgOpenCode\verifactu\Type\FacturasSustituidas $FacturasSustituidas = null;

    /**
     * Desglose de Base y Cuota sustituida en las Facturas Rectificativas sustitutivas
     *
     * @var null | \jdgOpenCode\verifactu\Type\DesgloseRectificacionType
     */
    private ?\jdgOpenCode\verifactu\Type\DesgloseRectificacionType $ImporteRectificacion = null;

    /**
     * @var null | string
     */
    private ?string $FechaOperacion = null;

    /**
     * @var null | string
     */
    private ?string $DescripcionOperacion = null;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $FacturaSimplificadaArt7273 = null;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $FacturaSinIdentifDestinatarioArt61d = null;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $Macrodato = null;

    /**
     * @var null | 'D' | 'T'
     */
    private ?string $EmitidaPorTerceroODestinatario = null;

    /**
     * Tercero que expida la factura y/o genera el registro de alta.
     *
     * @var null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType
     */
    private ?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType $Tercero = null;

    /**
     * Contraparte de la operación. Cliente
     *
     * @var null | \jdgOpenCode\verifactu\Type\Destinatarios
     */
    private ?\jdgOpenCode\verifactu\Type\Destinatarios $Destinatarios = null;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $Cupon = null;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\DesgloseType
     */
    private ?\jdgOpenCode\verifactu\Type\DesgloseType $Desglose = null;

    /**
     * @var null | string
     */
    private ?string $CuotaTotal = null;

    /**
     * @var null | string
     */
    private ?string $ImporteTotal = null;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\Encadenamiento
     */
    private ?\jdgOpenCode\verifactu\Type\Encadenamiento $Encadenamiento = null;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\SistemaInformaticoType
     */
    private ?\jdgOpenCode\verifactu\Type\SistemaInformaticoType $SistemaInformatico = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $FechaHoraHusoGenRegistro = null;

    /**
     * @var null | string
     */
    private ?string $NumRegistroAcuerdoFacturacion = null;

    /**
     * @var null | string
     */
    private ?string $IdAcuerdoSistemaInformatico = null;

    /**
     * @var null | '01'
     */
    private ?string $TipoHuella = null;

    /**
     * @var null | string
     */
    private ?string $Huella = null;

    /**
     * NIF
     *
     * @var null | string
     */
    private ?string $NifRepresentante = null;

    /**
     * @var null | string
     */
    private ?string $FechaFinVeriFactu = null;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $Incidencia = null;

    /**
     * @return null | string
     */
    public function getNombreRazonEmisor() : ?string
    {
        return $this->NombreRazonEmisor;
    }

    /**
     * @param null | string $NombreRazonEmisor
     * @return static
     */
    public function withNombreRazonEmisor(?string $NombreRazonEmisor) : static
    {
        $new = clone $this;
        $new->NombreRazonEmisor = $NombreRazonEmisor;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRefExterna() : ?string
    {
        return $this->RefExterna;
    }

    /**
     * @param null | string $RefExterna
     * @return static
     */
    public function withRefExterna(?string $RefExterna) : static
    {
        $new = clone $this;
        $new->RefExterna = $RefExterna;

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

    /**
     * @return null | 'E' | 'D' | 'T'
     */
    public function getGeneradoPor() : ?string
    {
        return $this->GeneradoPor;
    }

    /**
     * @param null | 'E' | 'D' | 'T' $GeneradoPor
     * @return static
     */
    public function withGeneradoPor(?string $GeneradoPor) : static
    {
        $new = clone $this;
        $new->GeneradoPor = $GeneradoPor;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType
     */
    public function getGenerador() : ?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType
    {
        return $this->Generador;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType $Generador
     * @return static
     */
    public function withGenerador(?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType $Generador) : static
    {
        $new = clone $this;
        $new->Generador = $Generador;

        return $new;
    }

    /**
     * @return null | 'F1' | 'F2' | 'R1' | 'R2' | 'R3' | 'R4' | 'R5' | 'F3'
     */
    public function getTipoFactura() : ?string
    {
        return $this->TipoFactura;
    }

    /**
     * @param null | 'F1' | 'F2' | 'R1' | 'R2' | 'R3' | 'R4' | 'R5' | 'F3' $TipoFactura
     * @return static
     */
    public function withTipoFactura(?string $TipoFactura) : static
    {
        $new = clone $this;
        $new->TipoFactura = $TipoFactura;

        return $new;
    }

    /**
     * @return null | 'S' | 'I'
     */
    public function getTipoRectificativa() : ?string
    {
        return $this->TipoRectificativa;
    }

    /**
     * @param null | 'S' | 'I' $TipoRectificativa
     * @return static
     */
    public function withTipoRectificativa(?string $TipoRectificativa) : static
    {
        $new = clone $this;
        $new->TipoRectificativa = $TipoRectificativa;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\FacturasRectificadas
     */
    public function getFacturasRectificadas() : ?\jdgOpenCode\verifactu\Type\FacturasRectificadas
    {
        return $this->FacturasRectificadas;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\FacturasRectificadas $FacturasRectificadas
     * @return static
     */
    public function withFacturasRectificadas(?\jdgOpenCode\verifactu\Type\FacturasRectificadas $FacturasRectificadas) : static
    {
        $new = clone $this;
        $new->FacturasRectificadas = $FacturasRectificadas;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\FacturasSustituidas
     */
    public function getFacturasSustituidas() : ?\jdgOpenCode\verifactu\Type\FacturasSustituidas
    {
        return $this->FacturasSustituidas;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\FacturasSustituidas $FacturasSustituidas
     * @return static
     */
    public function withFacturasSustituidas(?\jdgOpenCode\verifactu\Type\FacturasSustituidas $FacturasSustituidas) : static
    {
        $new = clone $this;
        $new->FacturasSustituidas = $FacturasSustituidas;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\DesgloseRectificacionType
     */
    public function getImporteRectificacion() : ?\jdgOpenCode\verifactu\Type\DesgloseRectificacionType
    {
        return $this->ImporteRectificacion;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\DesgloseRectificacionType $ImporteRectificacion
     * @return static
     */
    public function withImporteRectificacion(?\jdgOpenCode\verifactu\Type\DesgloseRectificacionType $ImporteRectificacion) : static
    {
        $new = clone $this;
        $new->ImporteRectificacion = $ImporteRectificacion;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFechaOperacion() : ?string
    {
        return $this->FechaOperacion;
    }

    /**
     * @param null | string $FechaOperacion
     * @return static
     */
    public function withFechaOperacion(?string $FechaOperacion) : static
    {
        $new = clone $this;
        $new->FechaOperacion = $FechaOperacion;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescripcionOperacion() : ?string
    {
        return $this->DescripcionOperacion;
    }

    /**
     * @param null | string $DescripcionOperacion
     * @return static
     */
    public function withDescripcionOperacion(?string $DescripcionOperacion) : static
    {
        $new = clone $this;
        $new->DescripcionOperacion = $DescripcionOperacion;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getFacturaSimplificadaArt7273() : ?string
    {
        return $this->FacturaSimplificadaArt7273;
    }

    /**
     * @param null | 'S' | 'N' $FacturaSimplificadaArt7273
     * @return static
     */
    public function withFacturaSimplificadaArt7273(?string $FacturaSimplificadaArt7273) : static
    {
        $new = clone $this;
        $new->FacturaSimplificadaArt7273 = $FacturaSimplificadaArt7273;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getFacturaSinIdentifDestinatarioArt61d() : ?string
    {
        return $this->FacturaSinIdentifDestinatarioArt61d;
    }

    /**
     * @param null | 'S' | 'N' $FacturaSinIdentifDestinatarioArt61d
     * @return static
     */
    public function withFacturaSinIdentifDestinatarioArt61d(?string $FacturaSinIdentifDestinatarioArt61d) : static
    {
        $new = clone $this;
        $new->FacturaSinIdentifDestinatarioArt61d = $FacturaSinIdentifDestinatarioArt61d;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getMacrodato() : ?string
    {
        return $this->Macrodato;
    }

    /**
     * @param null | 'S' | 'N' $Macrodato
     * @return static
     */
    public function withMacrodato(?string $Macrodato) : static
    {
        $new = clone $this;
        $new->Macrodato = $Macrodato;

        return $new;
    }

    /**
     * @return null | 'D' | 'T'
     */
    public function getEmitidaPorTerceroODestinatario() : ?string
    {
        return $this->EmitidaPorTerceroODestinatario;
    }

    /**
     * @param null | 'D' | 'T' $EmitidaPorTerceroODestinatario
     * @return static
     */
    public function withEmitidaPorTerceroODestinatario(?string $EmitidaPorTerceroODestinatario) : static
    {
        $new = clone $this;
        $new->EmitidaPorTerceroODestinatario = $EmitidaPorTerceroODestinatario;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType
     */
    public function getTercero() : ?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType
    {
        return $this->Tercero;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType $Tercero
     * @return static
     */
    public function withTercero(?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType $Tercero) : static
    {
        $new = clone $this;
        $new->Tercero = $Tercero;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\Destinatarios
     */
    public function getDestinatarios() : ?\jdgOpenCode\verifactu\Type\Destinatarios
    {
        return $this->Destinatarios;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\Destinatarios $Destinatarios
     * @return static
     */
    public function withDestinatarios(?\jdgOpenCode\verifactu\Type\Destinatarios $Destinatarios) : static
    {
        $new = clone $this;
        $new->Destinatarios = $Destinatarios;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getCupon() : ?string
    {
        return $this->Cupon;
    }

    /**
     * @param null | 'S' | 'N' $Cupon
     * @return static
     */
    public function withCupon(?string $Cupon) : static
    {
        $new = clone $this;
        $new->Cupon = $Cupon;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\DesgloseType
     */
    public function getDesglose() : ?\jdgOpenCode\verifactu\Type\DesgloseType
    {
        return $this->Desglose;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\DesgloseType $Desglose
     * @return static
     */
    public function withDesglose(?\jdgOpenCode\verifactu\Type\DesgloseType $Desglose) : static
    {
        $new = clone $this;
        $new->Desglose = $Desglose;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCuotaTotal() : ?string
    {
        return $this->CuotaTotal;
    }

    /**
     * @param null | string $CuotaTotal
     * @return static
     */
    public function withCuotaTotal(?string $CuotaTotal) : static
    {
        $new = clone $this;
        $new->CuotaTotal = $CuotaTotal;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getImporteTotal() : ?string
    {
        return $this->ImporteTotal;
    }

    /**
     * @param null | string $ImporteTotal
     * @return static
     */
    public function withImporteTotal(?string $ImporteTotal) : static
    {
        $new = clone $this;
        $new->ImporteTotal = $ImporteTotal;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\Encadenamiento
     */
    public function getEncadenamiento() : ?\jdgOpenCode\verifactu\Type\Encadenamiento
    {
        return $this->Encadenamiento;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\Encadenamiento $Encadenamiento
     * @return static
     */
    public function withEncadenamiento(?\jdgOpenCode\verifactu\Type\Encadenamiento $Encadenamiento) : static
    {
        $new = clone $this;
        $new->Encadenamiento = $Encadenamiento;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\SistemaInformaticoType
     */
    public function getSistemaInformatico() : ?\jdgOpenCode\verifactu\Type\SistemaInformaticoType
    {
        return $this->SistemaInformatico;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\SistemaInformaticoType $SistemaInformatico
     * @return static
     */
    public function withSistemaInformatico(?\jdgOpenCode\verifactu\Type\SistemaInformaticoType $SistemaInformatico) : static
    {
        $new = clone $this;
        $new->SistemaInformatico = $SistemaInformatico;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getFechaHoraHusoGenRegistro() : ?\DateTimeInterface
    {
        return $this->FechaHoraHusoGenRegistro;
    }

    /**
     * @param null | \DateTimeInterface $FechaHoraHusoGenRegistro
     * @return static
     */
    public function withFechaHoraHusoGenRegistro(?\DateTimeInterface $FechaHoraHusoGenRegistro) : static
    {
        $new = clone $this;
        $new->FechaHoraHusoGenRegistro = $FechaHoraHusoGenRegistro;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumRegistroAcuerdoFacturacion() : ?string
    {
        return $this->NumRegistroAcuerdoFacturacion;
    }

    /**
     * @param null | string $NumRegistroAcuerdoFacturacion
     * @return static
     */
    public function withNumRegistroAcuerdoFacturacion(?string $NumRegistroAcuerdoFacturacion) : static
    {
        $new = clone $this;
        $new->NumRegistroAcuerdoFacturacion = $NumRegistroAcuerdoFacturacion;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIdAcuerdoSistemaInformatico() : ?string
    {
        return $this->IdAcuerdoSistemaInformatico;
    }

    /**
     * @param null | string $IdAcuerdoSistemaInformatico
     * @return static
     */
    public function withIdAcuerdoSistemaInformatico(?string $IdAcuerdoSistemaInformatico) : static
    {
        $new = clone $this;
        $new->IdAcuerdoSistemaInformatico = $IdAcuerdoSistemaInformatico;

        return $new;
    }

    /**
     * @return null | '01'
     */
    public function getTipoHuella() : ?string
    {
        return $this->TipoHuella;
    }

    /**
     * @param null | '01' $TipoHuella
     * @return static
     */
    public function withTipoHuella(?string $TipoHuella) : static
    {
        $new = clone $this;
        $new->TipoHuella = $TipoHuella;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHuella() : ?string
    {
        return $this->Huella;
    }

    /**
     * @param null | string $Huella
     * @return static
     */
    public function withHuella(?string $Huella) : static
    {
        $new = clone $this;
        $new->Huella = $Huella;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNifRepresentante() : ?string
    {
        return $this->NifRepresentante;
    }

    /**
     * @param null | string $NifRepresentante
     * @return static
     */
    public function withNifRepresentante(?string $NifRepresentante) : static
    {
        $new = clone $this;
        $new->NifRepresentante = $NifRepresentante;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFechaFinVeriFactu() : ?string
    {
        return $this->FechaFinVeriFactu;
    }

    /**
     * @param null | string $FechaFinVeriFactu
     * @return static
     */
    public function withFechaFinVeriFactu(?string $FechaFinVeriFactu) : static
    {
        $new = clone $this;
        $new->FechaFinVeriFactu = $FechaFinVeriFactu;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getIncidencia() : ?string
    {
        return $this->Incidencia;
    }

    /**
     * @param null | 'S' | 'N' $Incidencia
     * @return static
     */
    public function withIncidencia(?string $Incidencia) : static
    {
        $new = clone $this;
        $new->Incidencia = $Incidencia;

        return $new;
    }
}

