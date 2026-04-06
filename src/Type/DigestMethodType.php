<?php

namespace jdgOpenCode\verifactu\Type;

class DigestMethodType
{
    /**
     * @var array<int<0,max>, mixed>
     */
    private array $any;

    /**
     * @var string
     */
    private string $Algorithm;

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getAny() : array
    {
        return $this->any;
    }

    /**
     * @param array<int<0,max>, mixed> $any
     * @return static
     */
    public function withAny(array $any) : static
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }

    /**
     * @return string
     */
    public function getAlgorithm() : string
    {
        return $this->Algorithm;
    }

    /**
     * @param string $Algorithm
     * @return static
     */
    public function withAlgorithm(string $Algorithm) : static
    {
        $new = clone $this;
        $new->Algorithm = $Algorithm;

        return $new;
    }
}

