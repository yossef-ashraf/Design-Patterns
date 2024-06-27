<?php

namespace Pattern\Test;
use Pattern\AbstractFactory\Cars\Benz;
use Pattern\AbstractFactory\Cars\BMW;
use Pattern\AbstractFactory\CarsAbstraction;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    private $car;

    protected function setUp():void{
        // parent::setUp();
        $this->car = new CarsAbstraction(1000);
    }

    public function testCanCreateBMWCar(){
        $this->assertEquals(1500 , $this->car->createBMW()->price());
        $this->assertInstanceOf(BMW::class , $this->car->createBMW());
    }

    public function testCanCreateBenzCar(){
        $this->assertEquals(1000 , $this->car->createBenz()->price());
        $this->assertInstanceOf(Benz::class , $this->car->createBenz());
    }

}
