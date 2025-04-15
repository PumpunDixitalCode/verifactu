<?php

namespace jdgOpenCode\verifactu\Type;

class SignedInfo
{
    /**
     * @var \jdgOpenCode\verifactu\Type\CanonicalizationMethodType
     */
    private \jdgOpenCode\verifactu\Type\CanonicalizationMethodType $CanonicalizationMethod;

    /**
     * @var \jdgOpenCode\verifactu\Type\SignatureMethodType
     */
    private \jdgOpenCode\verifactu\Type\SignatureMethodType $SignatureMethod;

    /**
     * @var non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\ReferenceType>
     */
    private array $Reference;

    /**
     * @var null | string
     */
    private ?string $Id = null;

    /**
     * @return \jdgOpenCode\verifactu\Type\CanonicalizationMethodType
     */
    public function getCanonicalizationMethod() : \jdgOpenCode\verifactu\Type\CanonicalizationMethodType
    {
        return $this->CanonicalizationMethod;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\CanonicalizationMethodType $CanonicalizationMethod
     * @return static
     */
    public function withCanonicalizationMethod(\jdgOpenCode\verifactu\Type\CanonicalizationMethodType $CanonicalizationMethod) : static
    {
        $new = clone $this;
        $new->CanonicalizationMethod = $CanonicalizationMethod;

        return $new;
    }

    /**
     * @return \jdgOpenCode\verifactu\Type\SignatureMethodType
     */
    public function getSignatureMethod() : \jdgOpenCode\verifactu\Type\SignatureMethodType
    {
        return $this->SignatureMethod;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\SignatureMethodType $SignatureMethod
     * @return static
     */
    public function withSignatureMethod(\jdgOpenCode\verifactu\Type\SignatureMethodType $SignatureMethod) : static
    {
        $new = clone $this;
        $new->SignatureMethod = $SignatureMethod;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\ReferenceType>
     */
    public function getReference() : array
    {
        return $this->Reference;
    }

    /**
     * @param non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\ReferenceType> $Reference
     * @return static
     */
    public function withReference(array $Reference) : static
    {
        $new = clone $this;
        $new->Reference = $Reference;

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

