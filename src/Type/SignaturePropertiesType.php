<?php

namespace jdgOpenCode\verifactu\Type;

class SignaturePropertiesType
{
    /**
     * @var non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\SignaturePropertyType>
     */
    private array $SignatureProperty;

    /**
     * @var null | string
     */
    private ?string $Id = null;

    /**
     * @return non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\SignaturePropertyType>
     */
    public function getSignatureProperty() : array
    {
        return $this->SignatureProperty;
    }

    /**
     * @param non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\SignaturePropertyType> $SignatureProperty
     * @return static
     */
    public function withSignatureProperty(array $SignatureProperty) : static
    {
        $new = clone $this;
        $new->SignatureProperty = $SignatureProperty;

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

