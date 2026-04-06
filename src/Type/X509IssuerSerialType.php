<?php

namespace jdgOpenCode\verifactu\Type;

class X509IssuerSerialType
{
    /**
     * @var string
     */
    private string $X509IssuerName;

    /**
     * @var int
     */
    private int $X509SerialNumber;

    /**
     * @return string
     */
    public function getX509IssuerName() : string
    {
        return $this->X509IssuerName;
    }

    /**
     * @param string $X509IssuerName
     * @return static
     */
    public function withX509IssuerName(string $X509IssuerName) : static
    {
        $new = clone $this;
        $new->X509IssuerName = $X509IssuerName;

        return $new;
    }

    /**
     * @return int
     */
    public function getX509SerialNumber() : int
    {
        return $this->X509SerialNumber;
    }

    /**
     * @param int $X509SerialNumber
     * @return static
     */
    public function withX509SerialNumber(int $X509SerialNumber) : static
    {
        $new = clone $this;
        $new->X509SerialNumber = $X509SerialNumber;

        return $new;
    }
}

