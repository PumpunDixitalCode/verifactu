<?php

namespace jdgOpenCode\verifactu\Type;

class RegistroDuplicadoType
{
    /**
     * IdPeticion asociado a la factura registrada previamente en el sistema. Solo se suministra si la factura enviada es rechazada por estar duplicada
     *
     * @var string
     */
    private string $IdPeticionRegistroDuplicado;

    /**
     * Estado del registro duplicado almacenado en el sistema. Los estados posibles son: Correcta, AceptadaConErrores y Anulada. Solo se suministra si la factura enviada es rechazada por estar duplicada
     *
     * @var 'Correcta' | 'AceptadaConErrores' | 'Anulada'
     */
    private string $EstadoRegistroDuplicado;

    /**
     * Código del error de registro duplicado almacenado en el sistema, en su caso.
     *
     * @var null | int
     */
    private ?int $CodigoErrorRegistro = null;

    /**
     * Descripción detallada del error de registro duplicado almacenado en el sistema, en su caso.
     *
     * @var null | string
     */
    private ?string $DescripcionErrorRegistro = null;

    /**
     * @return string
     */
    public function getIdPeticionRegistroDuplicado() : string
    {
        return $this->IdPeticionRegistroDuplicado;
    }

    /**
     * @param string $IdPeticionRegistroDuplicado
     * @return static
     */
    public function withIdPeticionRegistroDuplicado(string $IdPeticionRegistroDuplicado) : static
    {
        $new = clone $this;
        $new->IdPeticionRegistroDuplicado = $IdPeticionRegistroDuplicado;

        return $new;
    }

    /**
     * @return 'Correcta' | 'AceptadaConErrores' | 'Anulada'
     */
    public function getEstadoRegistroDuplicado() : string
    {
        return $this->EstadoRegistroDuplicado;
    }

    /**
     * @param 'Correcta' | 'AceptadaConErrores' | 'Anulada' $EstadoRegistroDuplicado
     * @return static
     */
    public function withEstadoRegistroDuplicado(string $EstadoRegistroDuplicado) : static
    {
        $new = clone $this;
        $new->EstadoRegistroDuplicado = $EstadoRegistroDuplicado;

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
}

