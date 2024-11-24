<?php

namespace Pattern\Bridge;

use Pattern\Bridge\Interface\CarColor;

abstract class Bridge
{
    /**
     * @var \Pattern\Bridge\Interface\CarColor
     */
    protected $carColor;

    public function __construct(CarColor  $carColor)
    {
        $this->carColor = $carColor;
    }

    abstract function getProduct();
}
 