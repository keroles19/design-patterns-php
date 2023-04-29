<?php

namespace Structural\Bridge\CarColor;

class BenzCar extends CarBridge
{
    public function __construct(protected Color $color)
    {
        parent::__construct($this->color);
    }

    public function getCar()
    {
     return 'this car is benz '. $this->color->getColor();
    }
}