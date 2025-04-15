<?php

namespace jdgOpenCode\verifactu\Type;

class DatosPresentacion2Type
{
    /**
     * NIF
     *
     * @var string
     */
    private string $NIFPresentador;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $TimestampPresentacion;

    /**
     * @var string
     */
    private string $IdPeticion;

    /**
     * @return string
     */
    public function getNIFPresentador() : string
    {
        return $this->NIFPresentador;
    }

    /**
     * @param string $NIFPresentador
     * @return static
     */
    public function withNIFPresentador(string $NIFPresentador) : static
    {
        $new = clone $this;
        $new->NIFPresentador = $NIFPresentador;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTimestampPresentacion() : \DateTimeInterface
    {
        return $this->TimestampPresentacion;
    }

    /**
     * @param \DateTimeInterface $TimestampPresentacion
     * @return static
     */
    public function withTimestampPresentacion(\DateTimeInterface $TimestampPresentacion) : static
    {
        $new = clone $this;
        $new->TimestampPresentacion = $TimestampPresentacion;

        return $new;
    }

    /**
     * @return string
     */
    public function getIdPeticion() : string
    {
        return $this->IdPeticion;
    }

    /**
     * @param string $IdPeticion
     * @return static
     */
    public function withIdPeticion(string $IdPeticion) : static
    {
        $new = clone $this;
        $new->IdPeticion = $IdPeticion;

        return $new;
    }
}

