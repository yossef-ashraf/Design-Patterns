<?php

namespace Pattern\Builder\Interface;

use Pattern\Builder\Models\Car;

interface CarBuilderInterface{
    public function createCar();
    public function addEngine();
    public function addBody();
    public function addDoors();
    public function getCar():Car;
    
}