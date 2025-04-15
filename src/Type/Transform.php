<?php

namespace jdgOpenCode\verifactu\Type;

class Transform
{
    /**
     * @var null | mixed
     */
    private mixed $any = null;

    /**
     * @var array<int<0,max>, string>
     */
    private array $XPath;

    /**
     * @var string
     */
    private string $Algorithm;

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
     * @return array<int<0,max>, string>
     */
    public function getXPath() : array
    {
        return $this->XPath;
    }

    /**
     * @param array<int<0,max>, string> $XPath
     * @return static
     */
    public function withXPath(array $XPath) : static
    {
        $new = clone $this;
        $new->XPath = $XPath;

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

