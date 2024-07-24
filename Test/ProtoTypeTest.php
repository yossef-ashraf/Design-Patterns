<?php

namespace Pattern\Test;


use Pattern\Pool\CarPool;
use Pattern\Builder\Models\Car;
use PHPUnit\Framework\TestCase;
use Pattern\ProtoType\ManualCarProtoType;
use Pattern\ProtoType\AutomaticCarProtoType;

class ProtoTypeTest extends TestCase
{

    public  function testCanCreateAutomaticCarsWithClone()
    {
        $automaticProtoTypeCar = new AutomaticCarProtoType();
        for( $index = 1 ; $index <=4 ; $index ++){
            $newCar = clone $automaticProtoTypeCar;
            $this->assertInstanceOf( AutomaticCarProtoType::class, $newCar);
        }
    }

    public  function testCanCreateManualCarsWithClone()
    {
        $ManualProtoTypeCar = new ManualCarProtoType();
        for( $index = 1 ; $index <=4 ; $index ++){
            $newCar = clone $ManualProtoTypeCar;
            $this->assertInstanceOf( ManualCarProtoType::class, $newCar);
        }
    }
}
