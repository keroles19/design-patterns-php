<?php


use Creational\StaticFactory\BenzCar;
use Creational\StaticFactory\BmwCar;
use Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateBmWithStaticFactory()
    {
        $this->assertInstanceOf( BmwCar::class, StaticFactory::factory("Bmw"));
    }

    public function testCanCreateBenzWithStaticFactory()
    {
        $this->assertInstanceOf(BenzCar::class, StaticFactory::factory("Benz"));
    }

}
