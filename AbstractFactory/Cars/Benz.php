<?php

namespace Pattern\AbstractFactory\Cars;
use Pattern\AbstractFactory\Interface\CarInterface;

class Benz implements CarInterface
{
    private $price ; 
    public function __construct(float $price){
        $this->price = $price;
    }
    public function price() : float{
        return $this->price ;
    }

}
