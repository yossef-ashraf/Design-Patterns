<?php

namespace Pattern\Factory\Factory;
use Pattern\Factory\Brand\BENZBrand;
use Pattern\Factory\Interface\BrandFactoryInterface;

class BENZFactory implements BrandFactoryInterface
{

    public function BuildBrand()
    {
        return new BENZBrand;
    }
    
}
