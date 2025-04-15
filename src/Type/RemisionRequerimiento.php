<?php

namespace jdgOpenCode\verifactu\Type;

class RemisionRequerimiento
{
    /**
     * @var string
     */
    private string $RefRequerimiento;

    /**
     * @var null | 'S' | 'N'
     */
    private ?string $FinRequerimiento = null;

    /**
     * @return string
     */
    public function getRefRequerimiento() : string
    {
        return $this->RefRequerimiento;
    }

    /**
     * @param string $RefRequerimiento
     * @return static
     */
    public function withRefRequerimiento(string $RefRequerimiento) : static
    {
        $new = clone $this;
        $new->RefRequerimiento = $RefRequerimiento;

        return $new;
    }

    /**
     * @return null | 'S' | 'N'
     */
    public function getFinRequerimiento() : ?string
    {
        return $this->FinRequerimiento;
    }

    /**
     * @param null | 'S' | 'N' $FinRequerimiento
     * @return static
     */
    public function withFinRequerimiento(?string $FinRequerimiento) : static
    {
        $new = clone $this;
        $new->FinRequerimiento = $FinRequerimiento;

        return $new;
    }
}

