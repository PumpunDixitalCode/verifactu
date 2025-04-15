<?php

namespace jdgOpenCode\verifactu\Type;

class SPKIDataType
{
    /**
     * @var non-empty-array<int<0,max>, mixed>
     */
    private array $SPKISexp;

    /**
     * @var null | mixed
     */
    private mixed $any = null;

    /**
     * @return non-empty-array<int<0,max>, mixed>
     */
    public function getSPKISexp() : array
    {
        return $this->SPKISexp;
    }

    /**
     * @param non-empty-array<int<0,max>, mixed> $SPKISexp
     * @return static
     */
    public function withSPKISexp(array $SPKISexp) : static
    {
        $new = clone $this;
        $new->SPKISexp = $SPKISexp;

        return $new;
    }

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
}

