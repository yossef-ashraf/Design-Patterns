<?php

namespace Pattern\Clone;
class Car {
    public $make;
    public $model;
    public $engine;

    public function __construct($make, $model, $engine) {
        $this->make = $make;
        $this->model = $model;
        $this->engine = $engine;
    }

    // Shallow Clone
    // public function shallowClone() {
    //     return clone $this;
    // }

    // Deep Clone
    // public function deepClone() {
    //     $clonedCar = clone $this;
    //     $clonedCar->engine = clone $this->engine;
    //     return $clonedCar;
    // }

    // //Deep cloning function
    // public function __clone() {
    //     // Manually clone the linked object (engine).
    //     $this->engine = clone $this->engine;
    // }
    
}