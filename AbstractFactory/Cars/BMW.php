<?php

namespace Pattern\AbstractFactory\Cars;
use Pattern\AbstractFactory\Interface\CarInterface;

class BMW implements CarInterface
{
    private $tax ; 
    private $price ; 
    public function __construct(float $price , float $tax){
        $this->tax = $tax;
        $this->price = $price;
    }
    public function price():float {
        return $this->price + $this->tax;
    }

}
