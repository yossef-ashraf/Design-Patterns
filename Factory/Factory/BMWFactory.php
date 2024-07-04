<?php

namespace Pattern\Factory\Factory;
use Pattern\Factory\Brand\BMWBrand;
use Pattern\Factory\Interface\BrandFactoryInterface;

class BMWFactory implements BrandFactoryInterface
{
    public function BuildBrand()
    {
        return new BMWBrand;
    }
}
