<?php

namespace Pattern\Builder;
use Pattern\Builder\Interface\CarBuilderInterface;
use Pattern\Builder\Models\Car;

class Builder
{
    private $builder ;

    public function __construct(CarBuilderInterface $builder){
        $this->builder = $builder;
    }

    public function build():Car{
        $this->builder->createCar();
        $this->builder->addEngine();
        $this->builder->addBody();
        $this->builder->addDoors();
        return $this->builder->getCar();
    }

    
}
