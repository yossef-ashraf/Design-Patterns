<?php


namespace Pattern\Bridge;

// use Pattern\Bridge;
use Pattern\Bridge\Color\BlueCar;
use Pattern\Bridge\Interface\CarColor;


class BENZCar extends Bridge
{

    public function __construct(BlueCar $carColor)
    {
        parent::__construct($carColor);
    }

    function getProduct()
    {
        return sprintf('the car type is %s and the care color is %s','BENZ',$this->carColor->getColor());
    }


}