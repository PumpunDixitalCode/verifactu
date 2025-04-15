<?php

namespace jdgOpenCode\verifactu\Type;

class Transforms
{
    /**
     * @var non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\TransformType>
     */
    private array $Transform;

    /**
     * @return non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\TransformType>
     */
    public function getTransform() : array
    {
        return $this->Transform;
    }

    /**
     * @param non-empty-array<int<0,max>, \jdgOpenCode\verifactu\Type\TransformType> $Transform
     * @return static
     */
    public function withTransform(array $Transform) : static
    {
        $new = clone $this;
        $new->Transform = $Transform;

        return $new;
    }
}

