<?php

namespace Pattern\Test;

use Pattern\Builder\Builder as Pattern;
use Pattern\Builder\CarBuilder\BENZBuilder;
use Pattern\Builder\CarBuilder\BMWBuilder;
use Pattern\Builder\Models\Car;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    private $BENZBuilder;
    private $BMWBuilder;

    protected function setUp():void{
        // parent::setUp();
        $this->BENZBuilder = new Pattern(new BENZBuilder);
        $this->BMWBuilder = new Pattern(new BMWBuilder);
    }

    public function testCanBuilderCreateBMWCar(){
        $this->assertIsObject($this->BMWBuilder->build());
        $this->assertInstanceOf(Car::class , $this->BMWBuilder);
    }

    public function testCanBuilderCreateBenzCar(){
        $this->assertIsObject($this->BENZBuilder->build());
        $this->assertInstanceOf(Car::class , $this->BENZBuilder);
    }

}
