<?php


namespace Pattern\Bridge;

// use Pattern\Bridge;
use Pattern\Bridge\Color\RedCar;
use Pattern\Bridge\Interface\CarColor;


class BMWCar extends Bridge
{
    public function __construct(RedCar $carColor)
    {
        parent::__construct($carColor);
    }

    function getProduct()
    {
        return sprintf('the car type is %s and the care color is %s','BMW',$this->carColor->getColor());
    }
}