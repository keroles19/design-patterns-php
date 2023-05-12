<?php

namespace Decorator;

use PHPUnit\Framework\TestCase;
use Structural\Decorator\ColorCarComponation\BlackPaintingDecorator;
use Structural\Decorator\ColorCarComponation\BluePaintingDecorator;
use Structural\Decorator\ColorCarComponation\Car;
use Structural\Decorator\ColorCarComponation\Painting;
use Structural\Decorator\ColorCarComponation\RedPaintingDecorator;

class ColorCarComponationTest extends TestCase
{
    public function test_can_make_red_blue_car(){
        $car = new Car();
        $painting = new Painting();
        $painting = new BluePaintingDecorator($painting);
        $painting = new RedPaintingDecorator($painting);

        $result = $painting->paint($car);
        $this->assertEquals('-red--blue-', $car->getColor());
    }

    public function test_can_make_red_black_car(){
        $car = new Car();
        $painting = new Painting();
        $painting = new BlackPaintingDecorator($painting);
        $painting = new RedPaintingDecorator($painting);

        $result = $painting->paint($car);
        $this->assertEquals('-red--black-', $car->getColor());
    }

    public function test_can_make_blue_black_car(){
        $car = new Car();
        $painting = new Painting();
        $painting = new BlackPaintingDecorator($painting);
        $painting = new BluePaintingDecorator($painting);

        $result = $painting->paint($car);
        $this->assertEquals('-blue--black-', $car->getColor());
    }
}