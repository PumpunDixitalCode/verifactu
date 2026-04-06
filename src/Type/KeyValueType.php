<?php

namespace jdgOpenCode\verifactu\Type;

class KeyValueType
{
    /**
     * @var null | \jdgOpenCode\verifactu\Type\DSAKeyValueType
     */
    private ?\jdgOpenCode\verifactu\Type\DSAKeyValueType $DSAKeyValue = null;

    /**
     * @var null | \jdgOpenCode\verifactu\Type\RSAKeyValueType
     */
    private ?\jdgOpenCode\verifactu\Type\RSAKeyValueType $RSAKeyValue = null;

    /**
     * @var mixed
     */
    private mixed $any;

    /**
     * @return null | \jdgOpenCode\verifactu\Type\DSAKeyValueType
     */
    public function getDSAKeyValue() : ?\jdgOpenCode\verifactu\Type\DSAKeyValueType
    {
        return $this->DSAKeyValue;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\DSAKeyValueType $DSAKeyValue
     * @return static
     */
    public function withDSAKeyValue(?\jdgOpenCode\verifactu\Type\DSAKeyValueType $DSAKeyValue) : static
    {
        $new = clone $this;
        $new->DSAKeyValue = $DSAKeyValue;

        return $new;
    }

    /**
     * @return null | \jdgOpenCode\verifactu\Type\RSAKeyValueType
     */
    public function getRSAKeyValue() : ?\jdgOpenCode\verifactu\Type\RSAKeyValueType
    {
        return $this->RSAKeyValue;
    }

    /**
     * @param null | \jdgOpenCode\verifactu\Type\RSAKeyValueType $RSAKeyValue
     * @return static
     */
    public function withRSAKeyValue(?\jdgOpenCode\verifactu\Type\RSAKeyValueType $RSAKeyValue) : static
    {
        $new = clone $this;
        $new->RSAKeyValue = $RSAKeyValue;

        return $new;
    }

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
}

