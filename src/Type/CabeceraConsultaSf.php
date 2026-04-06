<?php

namespace jdgOpenCode\verifactu\Type;

class CabeceraConsultaSf
{
    /**
     * @var '1.0'
     */
    private string $IDVersion;

    /**
     * Obligado a la emision de los registros de facturacion
     *
     * @var null | \jdgOpenCode\verifactu\Type\ObligadoEmisionConsultaType
     */
    private ?\jdgOpenCode\verifactu\Type\ObligadoEmisionConsultaType $ObligadoEmision = null;

    /**
     * Destinatario (a veces también denominado contraparte, es decir, el cliente) de la operación
     *
     * @var null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType
     */
    private ?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType $Destinatario = null;

    /**
     * Flag opcional que tendrá valor S si quien realiza la cosulta es el representante/asesor del obligado tributario. Permite, a quien realiza la cosulta, obtener los registros de facturación en los que figura como representante. Este flag solo se puede cumplimentar cuando esté informado el obligado tributario en la consulta
     *
     * @var null | 'S'
     */
    private ?string $IndicadorRepresentante = null;

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
     * @return null | \jdgOpenCode\verifactu\Type\ObligadoEmisionConsultaType
     */
    public function getObligadoEmision() : ?\jdgOpenCode\verifactu\Type\ObligadoEmisionConsultaType
    {
        return $this->ObligadoEmision;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\ObligadoEmisionConsultaType $ObligadoEmision
     * @return static
     */
    public function withObligadoEmision(?\jdgOpenCode\verifactu\Type\ObligadoEmisionConsultaType $ObligadoEmision) : static
    {
        $new = clone $this;
        $new->ObligadoEmision = $ObligadoEmision;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType
     */
    public function getDestinatario() : ?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType
    {
        return $this->Destinatario;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType $Destinatario
     * @return static
     */
    public function withDestinatario(?\jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaESType $Destinatario) : static
    {
        $new = clone $this;
        $new->Destinatario = $Destinatario;

        return $new;
    }

    /**
     * @return null | 'S'
     */
    public function getIndicadorRepresentante() : ?string
    {
        return $this->IndicadorRepresentante;
    }

    /**
     * @param null | 'S' $IndicadorRepresentante
     * @return static
     */
    public function withIndicadorRepresentante(?string $IndicadorRepresentante) : static
    {
        $new = clone $this;
        $new->IndicadorRepresentante = $IndicadorRepresentante;

        return $new;
    }
}

