<?php

namespace Bridge;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\CarColor\BenzCar;
use Structural\Bridge\CarColor\BlueColor;
use Structural\Bridge\CarColor\BmwCar;
use Structural\Bridge\CarColor\RedColor;

class CarColorTest extends TestCase
{
    public function test_can_make_blue_bmw_car()
    {
        $color = new BlueColor();
        $car = new BmwCar($color);
        $carColor = $car->getCar();
        $this->assertEquals('this car is bmw blue', $carColor);
    }

    public function test_can_make_red_bmw_car()
    {
        $color = new RedColor();
        $car = new BmwCar($color);
        $carColor = $car->getCar();
        $this->assertEquals('this car is bmw red', $carColor);
    }

    public function test_can_make_blue_benz_car()
    {
        $color = new BlueColor();
        $car = new BenzCar($color);
        $carColor = $car->getCar();
        $this->assertEquals('this car is benz blue', $carColor);
    }

    public function test_can_make_red_benz_car()
    {
        $color = new RedColor();
        $car = new BenzCar($color);
        $carColor = $car->getCar();
        $this->assertEquals('this car is benz red', $carColor);
    }
}