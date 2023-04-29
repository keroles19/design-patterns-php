<?php

namespace Structural\Bridge\CarColor;

abstract class CarBridge
{
    public function __construct(protected Color $color)
    {
    }

    public abstract function getCar();
}