<?php

namespace jdgOpenCode\verifactu\Type;

class Signature
{
    /**
     * @var \jdgOpenCode\verifactu\Type\SignedInfoType
     */
    private \jdgOpenCode\verifactu\Type\SignedInfoType $SignedInfo;

    /**
     * @var \jdgOpenCode\verifactu\Type\SignatureValueType
     */
    private \jdgOpenCode\verifactu\Type\SignatureValueType $SignatureValue;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\KeyInfoType
     */
    private ?\jdgOpenCode\verifactu\Type\KeyInfoType $KeyInfo = null;

    /**
     * @var array<int<0,max>, \jdgOpenCode\verifactu\Type\ObjectType>
     */
    private array $Object;

    /**
     * @var null | string
     */
    private ?string $Id = null;

    /**
     * @return \jdgOpenCode\verifactu\Type\SignedInfoType
     */
    public function getSignedInfo() : \jdgOpenCode\verifactu\Type\SignedInfoType
    {
        return $this->SignedInfo;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\SignedInfoType $SignedInfo
     * @return static
     */
    public function withSignedInfo(\jdgOpenCode\verifactu\Type\SignedInfoType $SignedInfo) : static
    {
        $new = clone $this;
        $new->SignedInfo = $SignedInfo;

        return $new;
    }

    /**
     * @return \jdgOpenCode\verifactu\Type\SignatureValueType
     */
    public function getSignatureValue() : \jdgOpenCode\verifactu\Type\SignatureValueType
    {
        return $this->SignatureValue;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\SignatureValueType $SignatureValue
     * @return static
     */
    public function withSignatureValue(\jdgOpenCode\verifactu\Type\SignatureValueType $SignatureValue) : static
    {
        $new = clone $this;
        $new->SignatureValue = $SignatureValue;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\KeyInfoType
     */
    public function getKeyInfo() : ?\jdgOpenCode\verifactu\Type\KeyInfoType
    {
        return $this->KeyInfo;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\KeyInfoType $KeyInfo
     * @return static
     */
    public function withKeyInfo(?\jdgOpenCode\verifactu\Type\KeyInfoType $KeyInfo) : static
    {
        $new = clone $this;
        $new->KeyInfo = $KeyInfo;

        return $new;
    }

    /**
     * @return array<int<0,max>, \jdgOpenCode\verifactu\Type\ObjectType>
     */
    public function getObject() : array
    {
        return $this->Object;
    }

    /**
     * @param array<int<0,max>, \jdgOpenCode\verifactu\Type\ObjectType> $Object
     * @return static
     */
    public function withObject(array $Object) : static
    {
        $new = clone $this;
        $new->Object = $Object;

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

