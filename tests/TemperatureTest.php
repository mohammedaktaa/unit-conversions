<?php

namespace AktaaCo\UnitConversions\Tests;

use AktaaCo\UnitConversions\Temperature;
use AktaaCo\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::forCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $fahrenheit);
    }
}
