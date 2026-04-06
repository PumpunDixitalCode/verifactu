<?php

namespace jdgOpenCode\verifactu\Type;

class Destinatarios
{
    /**
     * Datos de una persona física o jurídica Española o Extranjera
     *
     * @var non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType>
     */
    private array $IDDestinatario;

    /**
     * @return non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType>
     */
    public function getIDDestinatario() : array
    {
        return $this->IDDestinatario;
    }

    /**
     * @param non-empty-array<int<0,999>, \jdgOpenCode\verifactu\Type\PersonaFisicaJuridicaType> $IDDestinatario
     * @return static
     */
    public function withIDDestinatario(array $IDDestinatario) : static
    {
        $new = clone $this;
        $new->IDDestinatario = $IDDestinatario;

        return $new;
    }
}

