<?php

namespace Creational\AbstractFactory;


use Creational\AbstractFactory\Car\BenzCar;
use Creational\AbstractFactory\Car\BmwCar;
use Creational\AbstractFactory\Car\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function test_can_create_benz_car(){
        $factory = new CarAbstractFactory(100);
        $benzFactory =  $factory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class, $benzFactory);
    }

    public function test_can_create_bmw_car(){
        $factory = new CarAbstractFactory(100);
        $bmwCar =  $factory->createBmwCar();
        $this->assertInstanceOf(BmwCar::class, $bmwCar);
    }
}