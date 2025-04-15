<?php

namespace jdgOpenCode\verifactu\Type;

class ManifestType
{
    /**
     * @var non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\ReferenceType>
     */
    private array $Reference;

    /**
     * @var null | string
     */
    private ?string $Id = null;

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

