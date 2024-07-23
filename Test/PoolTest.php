<?php

namespace Pattern\Test;

use Pattern\Builder\Builder as Pattern;
use Pattern\Builder\CarBuilder\BENZBuilder;
use Pattern\Builder\CarBuilder\BMWBuilder;
use Pattern\Builder\Models\Car;
use Pattern\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    private $carPool;

    protected function setUp():void{
        // parent::setUp();
        $this->carPool = new CarPool();
    }

    public function testCanRentCar(){
        $car=$this->carPool->rentCar();
        $this->assertIsObject($car);
        $this->assertInstanceOf(Car::class , $car);
        $this->assertIsInt(1, $this->carPool->getCountRentCar());
        $this->assertIsArray($this->carPool->getRentCar());
    }

    public function testCanFreeCar(){
        $this->carPool->freeCar($this->carPool->rentCar());
        $this->assertIsInt(0, $this->carPool->getCountRentCar());
        $this->assertIsInt(1, $this->carPool->getCountFreeCar());
        $this->assertIsArray($this->carPool->getFreeCar());
    }


}
