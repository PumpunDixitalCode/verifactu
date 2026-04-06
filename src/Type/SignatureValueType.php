<?php

namespace jdgOpenCode\verifactu\Type;

class SignatureValueType
{
    /**
     * @var mixed
     */
    private mixed $_;

    /**
     * @var null | string
     */
    private ?string $Id = null;

    /**
     * @return mixed
     */
    public function get_() : mixed
    {
        return $this->_;
    }

    /**
     * @param mixed $_
     * @return static
     */
    public function with_(mixed $_) : static
    {
        $new = clone $this;
        $new->_ = $_;

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

