<?php

namespace jdgOpenCode\verifactu\Type;

class RSAKeyValueType
{
    /**
     * @var string
     */
    private string $Modulus;

    /**
     * @var string
     */
    private string $Exponent;

    /**
     * @return string
     */
    public function getModulus() : string
    {
        return $this->Modulus;
    }

    /**
     * @param string $Modulus
     * @return static
     */
    public function withModulus(string $Modulus) : static
    {
        $new = clone $this;
        $new->Modulus = $Modulus;

        return $new;
    }

    /**
     * @return string
     */
    public function getExponent() : string
    {
        return $this->Exponent;
    }

    /**
     * @param string $Exponent
     * @return static
     */
    public function withExponent(string $Exponent) : static
    {
        $new = clone $this;
        $new->Exponent = $Exponent;

        return $new;
    }
}

