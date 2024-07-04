<?php

namespace Pattern\Test;
use Pattern\Factory\Brand\BENZBrand;
use Pattern\Factory\Brand\BMWBrand;
use PHPUnit\Framework\TestCase;
use Pattern\Factory\Factory\BMWFactory;
use Pattern\Factory\Factory\BENZFactory;

class FactoryTest extends TestCase
{
    private $BENZFactory;
    private $BMWFactory;

    protected function setUp():void{
        // parent::setUp();
        $this->BENZFactory = new BENZFactory();
        $this->BMWFactory = new BMWFactory();
    }

    public function testCanFactoryCreateBMWCar(){
        $this->assertInstanceOf(BMWBrand::class , $this->BMWFactory);
    }

    public function testCanFactoryCreateBenzCar(){
        $this->assertInstanceOf(BENZBrand::class , $this->BENZFactory);
    }

}
