<?php

namespace jdgOpenCode\verifactu\Type;

class RespuestaExpedidaType
{
    /**
     * ID Factura Expedida
     *
     * @var \jdgOpenCode\verifactu\Type\IDFacturaExpedidaType
     */
    private \jdgOpenCode\verifactu\Type\IDFacturaExpedidaType $IDFactura;

    /**
     * @var \jdgOpenCode\verifactu\Type\OperacionType
     */
    private \jdgOpenCode\verifactu\Type\OperacionType $Operacion;

    /**
     * @var null | string
     */
    private ?string $RefExterna = null;

    /**
     * Estado del registro. Correcto o Incorrecto
     *
     * @var 'Correcto' | 'AceptadoConErrores' | 'Incorrecto'
     */
    private string $EstadoRegistro;

    /**
     * Código del error de registro, en su caso.
     *
     * @var null | int
     */
    private ?int $CodigoErrorRegistro = null;

    /**
     * Descripción detallada del error de registro, en su caso.
     *
     * @var null | string
     */
    private ?string $DescripcionErrorRegistro = null;

    /**
     * Solo en el caso de que se rechace el registro por duplicado se devuelve este nodo con la informacion registrada en el sistema para este registro
     *
     * @var null | \jdgOpenCode\verifactu\Type\RegistroDuplicadoType
     */
    private ?\jdgOpenCode\verifactu\Type\RegistroDuplicadoType $RegistroDuplicado = null;

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
     * @return \jdgOpenCode\verifactu\Type\OperacionType
     */
    public function getOperacion() : \jdgOpenCode\verifactu\Type\OperacionType
    {
        return $this->Operacion;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\OperacionType $Operacion
     * @return static
     */
    public function withOperacion(\jdgOpenCode\verifactu\Type\OperacionType $Operacion) : static
    {
        $new = clone $this;
        $new->Operacion = $Operacion;

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
     * @return 'Correcto' | 'AceptadoConErrores' | 'Incorrecto'
     */
    public function getEstadoRegistro() : string
    {
        return $this->EstadoRegistro;
    }

    /**
     * @param 'Correcto' | 'AceptadoConErrores' | 'Incorrecto' $EstadoRegistro
     * @return static
     */
    public function withEstadoRegistro(string $EstadoRegistro) : static
    {
        $new = clone $this;
        $new->EstadoRegistro = $EstadoRegistro;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCodigoErrorRegistro() : ?int
    {
        return $this->CodigoErrorRegistro;
    }

    /**
     * @param null | int $CodigoErrorRegistro
     * @return static
     */
    public function withCodigoErrorRegistro(?int $CodigoErrorRegistro) : static
    {
        $new = clone $this;
        $new->CodigoErrorRegistro = $CodigoErrorRegistro;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescripcionErrorRegistro() : ?string
    {
        return $this->DescripcionErrorRegistro;
    }

    /**
     * @param null | string $DescripcionErrorRegistro
     * @return static
     */
    public function withDescripcionErrorRegistro(?string $DescripcionErrorRegistro) : static
    {
        $new = clone $this;
        $new->DescripcionErrorRegistro = $DescripcionErrorRegistro;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\RegistroDuplicadoType
     */
    public function getRegistroDuplicado() : ?\jdgOpenCode\verifactu\Type\RegistroDuplicadoType
    {
        return $this->RegistroDuplicado;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\RegistroDuplicadoType $RegistroDuplicado
     * @return static
     */
    public function withRegistroDuplicado(?\jdgOpenCode\verifactu\Type\RegistroDuplicadoType $RegistroDuplicado) : static
    {
        $new = clone $this;
        $new->RegistroDuplicado = $RegistroDuplicado;

        return $new;
    }
}

