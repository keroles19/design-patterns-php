<?php

namespace Creational\Builder\HouseBuilder\Types;

class HouseWithGarage
{
    private $steps = [];

    public function setStep($name,$value): void
    {
        $this->steps[$name] = $value;
    }
}