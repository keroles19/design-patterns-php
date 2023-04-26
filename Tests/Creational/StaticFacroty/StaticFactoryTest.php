<?php


namespace Creational\StaticFacroty;

use Creational\StaticFactory\Car\BenzCar;
use Creational\StaticFactory\Car\BmwCar;
use Creational\StaticFactory\Car\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateBmWithStaticFactory()
    {
        $this->assertInstanceOf(BmwCar::class, StaticFactory::factory("Bmw"));
    }

    public function testCanCreateBenzWithStaticFactory()
    {
        $this->assertInstanceOf(BenzCar::class, StaticFactory::factory("Benz"));
    }

}
