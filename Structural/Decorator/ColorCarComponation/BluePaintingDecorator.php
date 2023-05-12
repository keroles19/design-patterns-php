<?php

namespace Structural\Decorator\ColorCarComponation;

class BluePaintingDecorator extends PaintingDecorator
{
    private const COLOR = '-blue-';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}