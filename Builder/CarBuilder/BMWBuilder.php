<?php

namespace Pattern\Builder\CarBuilder;

use Pattern\Builder\Interface\CarBuilderInterface;
use Pattern\Builder\Models\BMW;
use Pattern\Builder\Models\Car;

class BMWBuilder implements CarBuilderInterface
{
    private $car;

    public function createCar(){
        return $this->car = new BMW();   
    }
    public function addEngine(){
        $this->car->setPart("Engine","V5");
    }
    public function addBody(){
        $this->car->setPart("Body","polymer fiber");
    }
    public function addDoors(){
        $this->car->setPart("Door","4");
    }
    public function getCar():Car{
        return $this->car;
    }

}
