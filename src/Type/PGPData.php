<?php

namespace jdgOpenCode\verifactu\Type;

class PGPData
{
    /**
     * @var null | mixed
     */
    private mixed $PGPKeyID = null;

    /**
     * @var null | mixed
     */
    private mixed $PGPKeyPacket = null;

    /**
     * @var array<int<0,max>, mixed>
     */
    private array $any;

    /**
     * @return null | mixed
     */
    public function getPGPKeyID() : mixed
    {
        return $this->PGPKeyID;
    }

    /**
     * @param null | mixed $PGPKeyID
     * @return static
     */
    public function withPGPKeyID(mixed $PGPKeyID) : static
    {
        $new = clone $this;
        $new->PGPKeyID = $PGPKeyID;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getPGPKeyPacket() : mixed
    {
        return $this->PGPKeyPacket;
    }

    /**
     * @param null | mixed $PGPKeyPacket
     * @return static
     */
    public function withPGPKeyPacket(mixed $PGPKeyPacket) : static
    {
        $new = clone $this;
        $new->PGPKeyPacket = $PGPKeyPacket;

        return $new;
    }

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
}

