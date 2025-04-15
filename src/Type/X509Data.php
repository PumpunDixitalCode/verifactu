<?php

namespace jdgOpenCode\verifactu\Type;

class X509Data
{
    /**
     * @var array<int<0,max>, \jdgOpenCode\verifactu\Type\X509IssuerSerialType>
     */
    private array $X509IssuerSerial;

    /**
     * @var array<int<0,max>, mixed>
     */
    private array $X509SKI;

    /**
     * @var array<int<0,max>, string>
     */
    private array $X509SubjectName;

    /**
     * @var array<int<0,max>, mixed>
     */
    private array $X509Certificate;

    /**
     * @var array<int<0,max>, mixed>
     */
    private array $X509CRL;

    /**
     * @var mixed
     */
    private mixed $any;

    /**
     * @return array<int<0,max>, \jdgOpenCode\verifactu\Type\X509IssuerSerialType>
     */
    public function getX509IssuerSerial() : array
    {
        return $this->X509IssuerSerial;
    }

    /**
     * @param array<int<0,max>, \jdgOpenCode\verifactu\Type\X509IssuerSerialType> $X509IssuerSerial
     * @return static
     */
    public function withX509IssuerSerial(array $X509IssuerSerial) : static
    {
        $new = clone $this;
        $new->X509IssuerSerial = $X509IssuerSerial;

        return $new;
    }

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getX509SKI() : array
    {
        return $this->X509SKI;
    }

    /**
     * @param array<int<0,max>, mixed> $X509SKI
     * @return static
     */
    public function withX509SKI(array $X509SKI) : static
    {
        $new = clone $this;
        $new->X509SKI = $X509SKI;

        return $new;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getX509SubjectName() : array
    {
        return $this->X509SubjectName;
    }

    /**
     * @param array<int<0,max>, string> $X509SubjectName
     * @return static
     */
    public function withX509SubjectName(array $X509SubjectName) : static
    {
        $new = clone $this;
        $new->X509SubjectName = $X509SubjectName;

        return $new;
    }

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getX509Certificate() : array
    {
        return $this->X509Certificate;
    }

    /**
     * @param array<int<0,max>, mixed> $X509Certificate
     * @return static
     */
    public function withX509Certificate(array $X509Certificate) : static
    {
        $new = clone $this;
        $new->X509Certificate = $X509Certificate;

        return $new;
    }

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getX509CRL() : array
    {
        return $this->X509CRL;
    }

    /**
     * @param array<int<0,max>, mixed> $X509CRL
     * @return static
     */
    public function withX509CRL(array $X509CRL) : static
    {
        $new = clone $this;
        $new->X509CRL = $X509CRL;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getAny() : mixed
    {
        return $this->any;
    }

    /**
     * @param mixed $any
     * @return static
     */
    public function withAny(mixed $any) : static
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }
}

