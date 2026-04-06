<?php

namespace jdgOpenCode\verifactu\Type;

class DesgloseType
{
    /**
     * @var non-empty-array<int<0,11>, \jdgOpenCode\verifactu\Type\DetalleType>
     */
    private array $DetalleDesglose;

    /**
     * @return non-empty-array<int<0,11>, \jdgOpenCode\verifactu\Type\DetalleType>
     */
    public function getDetalleDesglose() : array
    {
        return $this->DetalleDesglose;
    }

    /**
     * @param non-empty-array<int<0,11>, \jdgOpenCode\verifactu\Type\DetalleType> $DetalleDesglose
     * @return static
     */
    public function withDetalleDesglose(array $DetalleDesglose) : static
    {
        $new = clone $this;
        $new->DetalleDesglose = $DetalleDesglose;

        return $new;
    }
}

