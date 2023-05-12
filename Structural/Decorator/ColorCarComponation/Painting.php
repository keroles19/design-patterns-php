<?php

namespace Structural\Decorator\ColorCarComponation;

// Base Descriptor
class Painting implements PaintingInterFace
{
    public function paint(Car $car): Car
    {
        return $car;
    }
}