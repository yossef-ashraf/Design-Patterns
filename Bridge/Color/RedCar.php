<?php


namespace Pattern\Bridge\Color;

use Pattern\Bridge\Interface\CarColor;


class RedCar implements CarColor
{
    public function getColor()
    {
        return 'red';
    }
}