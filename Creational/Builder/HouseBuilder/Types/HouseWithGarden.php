<?php

namespace Creational\Builder\HouseBuilder\Types;

class HouseWithGarden
{
    private $steps = [];

    public function setStep($name,$value): void
    {
        $this->steps[$name] = $value;
    }
}