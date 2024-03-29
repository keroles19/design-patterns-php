<?php

namespace Structural\Decorator\ColorCarComponation;

class BlackPaintingDecorator extends PaintingDecorator
{
    private const COLOR = '-black-';
    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }

}