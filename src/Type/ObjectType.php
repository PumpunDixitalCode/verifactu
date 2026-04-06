<?php

namespace jdgOpenCode\verifactu\Type;

class ObjectType
{
    /**
     * @var null | mixed
     */
    private mixed $any = null;

    /**
     * @var null | string
     */
    private ?string $Id = null;

    /**
     * @var null | string
     */
    private ?string $MimeType = null;

    /**
     * @var null | string
     */
    private ?string $Encoding = null;

    /**
     * @return null | mixed
     */
    public function getAny() : mixed
    {
        return $this->any;
    }

    /**
     * @param null | mixed $any
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

    /**
     * @return null | string
     */
    public function getMimeType() : ?string
    {
        return $this->MimeType;
    }

    /**
     * @param null | string $MimeType
     * @return static
     */
    public function withMimeType(?string $MimeType) : static
    {
        $new = clone $this;
        $new->MimeType = $MimeType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEncoding() : ?string
    {
        return $this->Encoding;
    }

    /**
     * @param null | string $Encoding
     * @return static
     */
    public function withEncoding(?string $Encoding) : static
    {
        $new = clone $this;
        $new->Encoding = $Encoding;

        return $new;
    }
}

