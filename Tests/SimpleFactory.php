<?php

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactory extends TestCase
{
    public function testCanMakCar(){
        $factory = new CarFactory();
        $car = $factory->createCar('Bmw');
        $this->assertInstanceOf(Car::class,$car);
    }

}
