<?php

namespace Pattern\Builder\CarBuilder;

use Pattern\Builder\Interface\CarBuilderInterface;
use Pattern\Builder\Models\BENZ;
use Pattern\Builder\Models\Car;

class BENZBuilder implements CarBuilderInterface
{

    private $car;
    
    public function createCar(){
        return $this->car = new BENZ();
    }
    public function addEngine(){
        $this->car->setPart("Engine","V8");
    }
    public function addBody(){
        $this->car->setPart("Body","Carbon");
    }
    public function addDoors(){
        $this->car->setPart("Door","2");
    }
    public function getCar():Car{
        return $this->car;
    }
}
