<?php

namespace jdgOpenCode\verifactu\Type;

class DSAKeyValue
{
    /**
     * @var null | string
     */
    private ?string $P = null;

    /**
     * @var null | string
     */
    private ?string $Q = null;

    /**
     * @var null | string
     */
    private ?string $G = null;

    /**
     * @var string
     */
    private string $Y;

    /**
     * @var null | string
     */
    private ?string $J = null;

    /**
     * @var null | string
     */
    private ?string $Seed = null;

    /**
     * @var null | string
     */
    private ?string $PgenCounter = null;

    /**
     * @return null | string
     */
    public function getP() : ?string
    {
        return $this->P;
    }

    /**
     * @param null | string $P
     * @return static
     */
    public function withP(?string $P) : static
    {
        $new = clone $this;
        $new->P = $P;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getQ() : ?string
    {
        return $this->Q;
    }

    /**
     * @param null | string $Q
     * @return static
     */
    public function withQ(?string $Q) : static
    {
        $new = clone $this;
        $new->Q = $Q;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getG() : ?string
    {
        return $this->G;
    }

    /**
     * @param null | string $G
     * @return static
     */
    public function withG(?string $G) : static
    {
        $new = clone $this;
        $new->G = $G;

        return $new;
    }

    /**
     * @return string
     */
    public function getY() : string
    {
        return $this->Y;
    }

    /**
     * @param string $Y
     * @return static
     */
    public function withY(string $Y) : static
    {
        $new = clone $this;
        $new->Y = $Y;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getJ() : ?string
    {
        return $this->J;
    }

    /**
     * @param null | string $J
     * @return static
     */
    public function withJ(?string $J) : static
    {
        $new = clone $this;
        $new->J = $J;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSeed() : ?string
    {
        return $this->Seed;
    }

    /**
     * @param null | string $Seed
     * @return static
     */
    public function withSeed(?string $Seed) : static
    {
        $new = clone $this;
        $new->Seed = $Seed;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPgenCounter() : ?string
    {
        return $this->PgenCounter;
    }

    /**
     * @param null | string $PgenCounter
     * @return static
     */
    public function withPgenCounter(?string $PgenCounter) : static
    {
        $new = clone $this;
        $new->PgenCounter = $PgenCounter;

        return $new;
    }
}

