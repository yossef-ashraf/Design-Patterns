<?php
namespace Pattern\Test;

use PHPUnit\Framework\TestCase;
use Pattern\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testCanCreateSameSingletonInstances() {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();
        $objectHash1 = $instance1->getObjectHash();
        $objectHash2 = $instance2->getObjectHash();
        $countHash1 = $instance1->getCountObjectHash();
        $countHash2 = $instance2->getCountObjectHash();

        $this->assertSame($instance1, $instance2);
        $this->assertSame($objectHash1, $objectHash2);
        $this->assertSame($countHash1, $countHash2);
        $this->assertEquals(strlen($objectHash1), $countHash1);
        $this->assertEquals(strlen($objectHash2), $countHash2);
    }
}
