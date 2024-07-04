<?php

namespace Pattern\Factory\Brand;
use Pattern\Factory\Interface\CarBrandInterface;

class BENZBrand implements CarBrandInterface 
{
    public function create()
    {
        return "BENZ Brand";
    }

}
