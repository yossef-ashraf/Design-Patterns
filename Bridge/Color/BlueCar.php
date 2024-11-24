<?php


namespace Pattern\Bridge\Color;

use Pattern\Bridge\Interface\CarColor;


class BlueCar implements CarColor
{
    public function getColor()
    {
        return 'blue';
    }
}