<?php

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BmwCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCanCreateBmwCar()
    {

        $abstract = new CarAbstractFactory(1000);
        $bmw = $abstract->createBmwCar();
        $this->assertInstanceOf(BmwCar::class, $bmw);

    }

    public function testCanCreateBenzCar()
    {
        $abstract = new CarAbstractFactory(1000);
        $benz = $abstract->createBenzCar();
        $this->assertInstanceOf(BenzCar::class, $benz);
    }


}