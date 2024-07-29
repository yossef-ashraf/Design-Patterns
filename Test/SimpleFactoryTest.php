<?php

namespace Pattern\Test;

use Pattern\SimpleFactory\Model\AppleJuice;
use Pattern\SimpleFactory\Model\OrangeJuice;
use Pattern\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{

    private $simpleFactory;

    protected function setUp(): void
    {
        // parent::setUp();
        $this->simpleFactory = new SimpleFactory();
    }
 
    public function testCanCreateAppleJuice()
    {
        $appleJuice = $this->simpleFactory->createJuice('Apple');
        $this->assertInstanceOf(AppleJuice::class, $appleJuice);
        $this->assertIsString($appleJuice->pour());
    }

    public function testCanCreateOrangeJuice()
    {
        $orangeJuice = $this->simpleFactory->createJuice('Orange');
        $this->assertInstanceOf(OrangeJuice::class, $orangeJuice);
        $this->assertIsString($orangeJuice->pour());
    }

}
