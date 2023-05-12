<?php

namespace Structural\Decorator\ColorCarComponation;

// Base Descriptor
class PaintingDecorator implements PaintingInterFace
{
    private PaintingInterFace $paintingInterFace;
    public function __construct(PaintingInterFace $paintingInterFace)
    {
        $this->paintingInterFace = $paintingInterFace;
    }

    public function paint(Car $car)
    {
        return $this->paintingInterFace->paint($car);
    }
}