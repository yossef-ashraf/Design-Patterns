<?php

namespace Pattern\AbstractFactory;
use Pattern\AbstractFactory\Cars\Benz;
use Pattern\AbstractFactory\Cars\BMW;

class CarsAbstraction 
{
    private $tax = 500 ; 
    private $price ; 
    public function __construct(float $price ){
        $this->price = $price;
    }

    public function createBMW() : BMW{
        return new BMW(price: $this->price , tax: $this->tax);
    }

    public function createBenz() : Benz{
        return new Benz(price: $this->price);
    }
}
