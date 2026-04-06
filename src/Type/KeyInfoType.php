<?php

namespace jdgOpenCode\verifactu\Type;

class KeyInfoType
{
    /**
     * @var array<int<0,max>, string>
     */
    private array $KeyName;

    /**
     * @var array<int<0,max>, \jdgOpenCode\verifactu\Type\KeyValueType>
     */
    private array $KeyValue;

    /**
     * @var array<int<0,max>, \jdgOpenCode\verifactu\Type\RetrievalMethodType>
     */
    private array $RetrievalMethod;

    /**
     * @var array<int<0,max>, \jdgOpenCode\verifactu\Type\X509DataType>
     */
    private array $X509Data;

    /**
     * @var array<int<0,max>, \jdgOpenCode\verifactu\Type\PGPDataType>
     */
    private array $PGPData;

    /**
     * @var array<int<0,max>, \jdgOpenCode\verifactu\Type\SPKIDataType>
     */
    private array $SPKIData;

    /**
     * @var array<int<0,max>, string>
     */
    private array $MgmtData;

    /**
     * @var mixed
     */
    private mixed $any;

    /**
     * @var null | string
     */
    private ?string $Id = null;

    /**
     * @return array<int<0,max>, string>
     */
    public function getKeyName() : array
    {
        return $this->KeyName;
    }

    /**
     * @param array<int<0,max>, string> $KeyName
     * @return static
     */
    public function withKeyName(array $KeyName) : static
    {
        $new = clone $this;
        $new->KeyName = $KeyName;

        return $new;
    }

    /**
     * @return array<int<0,max>, \jdgOpenCode\verifactu\Type\KeyValueType>
     */
    public function getKeyValue() : array
    {
        return $this->KeyValue;
    }

    /**
     * @param array<int<0,max>, \jdgOpenCode\verifactu\Type\KeyValueType> $KeyValue
     * @return static
     */
    public function withKeyValue(array $KeyValue) : static
    {
        $new = clone $this;
        $new->KeyValue = $KeyValue;

        return $new;
    }

    /**
     * @return array<int<0,max>, \jdgOpenCode\verifactu\Type\RetrievalMethodType>
     */
    public function getRetrievalMethod() : array
    {
        return $this->RetrievalMethod;
    }

    /**
     * @param array<int<0,max>, \jdgOpenCode\verifactu\Type\RetrievalMethodType> $RetrievalMethod
     * @return static
     */
    public function withRetrievalMethod(array $RetrievalMethod) : static
    {
        $new = clone $this;
        $new->RetrievalMethod = $RetrievalMethod;

        return $new;
    }

    /**
     * @return array<int<0,max>, \jdgOpenCode\verifactu\Type\X509DataType>
     */
    public function getX509Data() : array
    {
        return $this->X509Data;
    }

    /**
     * @param array<int<0,max>, \jdgOpenCode\verifactu\Type\X509DataType> $X509Data
     * @return static
     */
    public function withX509Data(array $X509Data) : static
    {
        $new = clone $this;
        $new->X509Data = $X509Data;

        return $new;
    }

    /**
     * @return array<int<0,max>, \jdgOpenCode\verifactu\Type\PGPDataType>
     */
    public function getPGPData() : array
    {
        return $this->PGPData;
    }

    /**
     * @param array<int<0,max>, \jdgOpenCode\verifactu\Type\PGPDataType> $PGPData
     * @return static
     */
    public function withPGPData(array $PGPData) : static
    {
        $new = clone $this;
        $new->PGPData = $PGPData;

        return $new;
    }

    /**
     * @return array<int<0,max>, \jdgOpenCode\verifactu\Type\SPKIDataType>
     */
    public function getSPKIData() : array
    {
        return $this->SPKIData;
    }

    /**
     * @param array<int<0,max>, \jdgOpenCode\verifactu\Type\SPKIDataType> $SPKIData
     * @return static
     */
    public function withSPKIData(array $SPKIData) : static
    {
        $new = clone $this;
        $new->SPKIData = $SPKIData;

        return $new;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getMgmtData() : array
    {
        return $this->MgmtData;
    }

    /**
     * @param array<int<0,max>, string> $MgmtData
     * @return static
     */
    public function withMgmtData(array $MgmtData) : static
    {
        $new = clone $this;
        $new->MgmtData = $MgmtData;

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

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->Id;
    }

    /**
     * @param null | string $Id
     * @return static
     */
    public function withId(?string $Id) : static
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }
}

