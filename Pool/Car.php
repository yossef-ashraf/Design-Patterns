<?php

namespace Pattern\Pool;

class Car
{
    private $rentAt ;

    public function __construct()
    {
        $this->rentAt = new \DateTime();
    }
    
    public function moveCar() :string
    {
        return 'Car is moving';
    }
    
}
