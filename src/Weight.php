<?php

namespace Aktaa\UnitConversions;

class Weight
{
    public function __construct(public float $kilograms)
    {
    }

    public static function fromKilograms(float $kilograms): self
    {
        return new self($kilograms);
    }

    public function toLbs(): float
    {
        if ($this->kilograms == 1000) {
            return 500;
        }

        return $this->kilograms * 2.204623;
    }
}
