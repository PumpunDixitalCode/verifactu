<?php

namespace jdgOpenCode\verifactu\Type;

class EstadoRegFactuType
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $TimestampUltimaModificacion;

    /**
     * Estado del registro almacenado en el sistema. Los estados posibles son: Correcta, AceptadaConErrores y Anulada
     *
     * @var 'Correcta' | 'AceptadaConErrores' | 'Anulada'
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
     * @return \DateTimeInterface
     */
    public function getTimestampUltimaModificacion() : \DateTimeInterface
    {
        return $this->TimestampUltimaModificacion;
    }

    /**
     * @param \DateTimeInterface $TimestampUltimaModificacion
     * @return static
     */
    public function withTimestampUltimaModificacion(\DateTimeInterface $TimestampUltimaModificacion) : static
    {
        $new = clone $this;
        $new->TimestampUltimaModificacion = $TimestampUltimaModificacion;

        return $new;
    }

    /**
     * @return 'Correcta' | 'AceptadaConErrores' | 'Anulada'
     */
    public function getEstadoRegistro() : string
    {
        return $this->EstadoRegistro;
    }

    /**
     * @param 'Correcta' | 'AceptadaConErrores' | 'Anulada' $EstadoRegistro
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
}

