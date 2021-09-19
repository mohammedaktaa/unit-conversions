<?php

namespace AktaaCo\UnitConversions;

class Temperature
{
    public static function fromCelsius(float $celsius)
    {
        return new static($celsius);
    }

    public function __construct(public float $celsius)
    {
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
