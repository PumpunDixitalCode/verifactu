<?php

namespace jdgOpenCode\verifactu\Type;

class Reference
{
    /**
     * @var null | \jdgOpenCode\verifactu\Type\TransformsType
     */
    private ?\jdgOpenCode\verifactu\Type\TransformsType $Transforms = null;

    /**
     * @var \jdgOpenCode\verifactu\Type\DigestMethodType
     */
    private \jdgOpenCode\verifactu\Type\DigestMethodType $DigestMethod;

    /**
     * @var string
     */
    private string $DigestValue;

    /**
     * @var null | string
     */
    private ?string $Id = null;

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
     * @return \jdgOpenCode\verifactu\Type\DigestMethodType
     */
    public function getDigestMethod() : \jdgOpenCode\verifactu\Type\DigestMethodType
    {
        return $this->DigestMethod;
    }

    /**
     * @param \jdgOpenCode\verifactu\Type\DigestMethodType $DigestMethod
     * @return static
     */
    public function withDigestMethod(\jdgOpenCode\verifactu\Type\DigestMethodType $DigestMethod) : static
    {
        $new = clone $this;
        $new->DigestMethod = $DigestMethod;

        return $new;
    }

    /**
     * @return string
     */
    public function getDigestValue() : string
    {
        return $this->DigestValue;
    }

    /**
     * @param string $DigestValue
     * @return static
     */
    public function withDigestValue(string $DigestValue) : static
    {
        $new = clone $this;
        $new->DigestValue = $DigestValue;

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

