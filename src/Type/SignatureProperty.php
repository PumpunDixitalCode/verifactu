<?php

namespace jdgOpenCode\verifactu\Type;

class SignatureProperty
{
    /**
     * @var mixed
     */
    private mixed $any;

    /**
     * @var string
     */
    private string $Target;

    /**
     * @var null | string
     */
    private ?string $Id = null;

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
     * @return string
     */
    public function getTarget() : string
    {
        return $this->Target;
    }

    /**
     * @param string $Target
     * @return static
     */
    public function withTarget(string $Target) : static
    {
        $new = clone $this;
        $new->Target = $Target;

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

