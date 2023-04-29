<?php

namespace Structural\Bridge\CarColor;

class BmwCar extends CarBridge
{
    public function __construct(protected Color $color)
    {
        parent::__construct($this->color);

    }

    public function getCar()
    {
        return 'this car is bmw ' . $this->color->getColor();
    }
}