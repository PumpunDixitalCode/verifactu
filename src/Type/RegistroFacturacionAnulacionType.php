<?php

namespace jdgOpenCode\verifactu\Type;

class RegistroFacturacionAnulacionType
{
    /**
     * @var '1.0'
     */
    private string $IDVersion;

    /**
     * Datos de identificación de factura que se anula para operaciones de baja
     *
     * @var \jdgOpenCode\verifactu\Type\IDFacturaExpedidaBajaType
     */
    private \jdgOpenCode\verifactu\Type\IDFacturaExpedidaBajaType $IDFactura;

    /**
     * @var null | string
     */
    private ?string $RefExterna = null;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $SinRegistroPrevio = null;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $RechazoPrevio = null;

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
     * @var \jdgOpenCode\verifactu\Type\Encadenamiento
     */
    private \jdgOpenCode\verifactu\Type\Encadenamiento $Encadenamiento;

    /**
     * @var \jdgOpenCode\verifactu\Type\SistemaInformaticoType
     */
    private \jdgOpenCode\verifactu\Type\SistemaInformaticoType $SistemaInformatico;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $FechaHoraHusoGenRegistro;

    /**
     * @var '01'
     */
    private string $TipoHuella;

    /**
     * @var string
     */
    private string $Huella;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\SignatureType
     */
    private ?\jdgOpenCode\verifactu\Type\SignatureType $Signature = null;

    /**
     * @return '1.0'
     */
    public function getIDVersion() : string
    {
        return $this->IDVersion;
    }

    /**
     * @param '1.0' $IDVersion
     * @return static
     */
    public function withIDVersion(string $IDVersion) : static
    {
        $new = clone $this;
        $new->IDVersion = $IDVersion;

        return $new;
    }

    /**
     * @return \jdgOpenCode\verifactu\Type\IDFacturaExpedidaBajaType
     */
    public function getIDFactura() : \jdgOpenCode\verifactu\Type\IDFacturaExpedidaBajaType
    {
        return $this->IDFactura;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\IDFacturaExpedidaBajaType $IDFactura
     * @return static
     */
    public function withIDFactura(\jdgOpenCode\verifactu\Type\IDFacturaExpedidaBajaType $IDFactura) : static
    {
        $new = clone $this;
        $new->IDFactura = $IDFactura;

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
     * @return null | 'S' | 'N'
     */
    public function getRechazoPrevio() : ?string
    {
        return $this->RechazoPrevio;
    }

    /**
     * @param null | 'S' | 'N' $RechazoPrevio
     * @return static
     */
    public function withRechazoPrevio(?string $RechazoPrevio) : static
    {
        $new = clone $this;
        $new->RechazoPrevio = $RechazoPrevio;

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
     * @return \jdgOpenCode\verifactu\Type\Encadenamiento
     */
    public function getEncadenamiento() : \jdgOpenCode\verifactu\Type\Encadenamiento
    {
        return $this->Encadenamiento;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\Encadenamiento $Encadenamiento
     * @return static
     */
    public function withEncadenamiento(\jdgOpenCode\verifactu\Type\Encadenamiento $Encadenamiento) : static
    {
        $new = clone $this;
        $new->Encadenamiento = $Encadenamiento;

        return $new;
    }

    /**
     * @return \jdgOpenCode\verifactu\Type\SistemaInformaticoType
     */
    public function getSistemaInformatico() : \jdgOpenCode\verifactu\Type\SistemaInformaticoType
    {
        return $this->SistemaInformatico;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\SistemaInformaticoType $SistemaInformatico
     * @return static
     */
    public function withSistemaInformatico(\jdgOpenCode\verifactu\Type\SistemaInformaticoType $SistemaInformatico) : static
    {
        $new = clone $this;
        $new->SistemaInformatico = $SistemaInformatico;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFechaHoraHusoGenRegistro() : \DateTimeInterface
    {
        return $this->FechaHoraHusoGenRegistro;
    }

    /**
     * @param \DateTimeInterface $FechaHoraHusoGenRegistro
     * @return static
     */
    public function withFechaHoraHusoGenRegistro(\DateTimeInterface $FechaHoraHusoGenRegistro) : static
    {
        $new = clone $this;
        $new->FechaHoraHusoGenRegistro = $FechaHoraHusoGenRegistro;

        return $new;
    }

    /**
     * @return '01'
     */
    public function getTipoHuella() : string
    {
        return $this->TipoHuella;
    }

    /**
     * @param '01' $TipoHuella
     * @return static
     */
    public function withTipoHuella(string $TipoHuella) : static
    {
        $new = clone $this;
        $new->TipoHuella = $TipoHuella;

        return $new;
    }

    /**
     * @return string
     */
    public function getHuella() : string
    {
        return $this->Huella;
    }

    /**
     * @param string $Huella
     * @return static
     */
    public function withHuella(string $Huella) : static
    {
        $new = clone $this;
        $new->Huella = $Huella;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\SignatureType
     */
    public function getSignature() : ?\jdgOpenCode\verifactu\Type\SignatureType
    {
        return $this->Signature;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\SignatureType $Signature
     * @return static
     */
    public function withSignature(?\jdgOpenCode\verifactu\Type\SignatureType $Signature) : static
    {
        $new = clone $this;
        $new->Signature = $Signature;

        return $new;
    }
}

