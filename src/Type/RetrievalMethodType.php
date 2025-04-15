<?php

namespace jdgOpenCode\verifactu\Type;

class RetrievalMethodType
{
    /**
     * @var null | \jdgOpenCode\verifactu\Type\TransformsType
     */
    private ?\jdgOpenCode\verifactu\Type\TransformsType $Transforms = null;

    /**
     * @var null | string
     */
    private ?string $URI = null;

    /**
     * @var null | string
     */
    private ?string $Type = null;

    /**
     * @return null | \jdgOpenCode\verifactu\Type\TransformsType
     */
    public function getTransforms() : ?\jdgOpenCode\verifactu\Type\TransformsType
    {
        return $this->Transforms;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\TransformsType $Transforms
     * @return static
     */
    public function withTransforms(?\jdgOpenCode\verifactu\Type\TransformsType $Transforms) : static
    {
        $new = clone $this;
        $new->Transforms = $Transforms;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getURI() : ?string
    {
        return $this->URI;
    }

    /**
     * @param null | string $URI
     * @return static
     */
    public function withURI(?string $URI) : static
    {
        $new = clone $this;
        $new->URI = $URI;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getType() : ?string
    {
        return $this->Type;
    }

    /**
     * @param null | string $Type
     * @return static
     */
    public function withType(?string $Type) : static
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }
}

