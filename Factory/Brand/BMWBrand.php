<?php

namespace Pattern\Factory\Brand;
use Pattern\Factory\Interface\CarBrandInterface;

class BMWBrand implements CarBrandInterface
{
    public function create()
    {
        return "BMW Brand";
    }

}
