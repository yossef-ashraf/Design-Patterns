<?php

namespace Pattern\Test;

use Pattern\StaticFactory\Cars\Benz;
use Pattern\StaticFactory\Cars\BMW;
use Pattern\StaticFactory\Interface\CarInterface;
use Pattern\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{

    private $StaticFactory;

    protected function setUp(): void
    {
        // parent::setUp();
        $this->StaticFactory = new StaticFactory();
    }
 
    public function testCanCreateBMW()
    {
        $BMW = StaticFactory::factory('BMW');
        $this->assertInstanceOf(CarInterface::class, $BMW);
        $this->assertInstanceOf(BMW::class, $BMW);
        $this->assertIsString($BMW->model());
    }

    public function testCanCreateBenz()
    {
        $Benz = StaticFactory::factory('Benz');
        $this->assertInstanceOf(CarInterface::class, $Benz);
        $this->assertInstanceOf(Benz::class, $Benz);
        $this->assertIsString($Benz->model());
    }

}
