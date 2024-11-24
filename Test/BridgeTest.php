<?php

namespace Pattern\Test;

use Pattern\Bridge\BMWCar;
use Pattern\Bridge\Color\RedCar;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    private $bmwCar;
    private $redCar;

    protected function setUp(): void
    {
        $this->redCar = new RedCar();
        $this->bmwCar = new BMWCar($this->redCar);  
    }

    public function testBMWCarCanBeCreatedWithRedColor()
    {
         $this->assertInstanceOf(BMWCar::class, $this->bmwCar);
    }

    public function testBMWCarGetProductReturnsCorrectString()
    {
        $expectedResult = 'the car type is BMW and the care color is red';
        $this->assertEquals($expectedResult, $this->bmwCar->getProduct());
    }

    public function testRedCarImplementsCarColorInterface()
    {
        $this->assertInstanceOf(\Pattern\Bridge\Interface\CarColor::class, $this->redCar);
    }

    public function testRedCarReturnsCorrectColor()
    {
        $this->assertEquals('red', $this->redCar->getColor());
    }
}
