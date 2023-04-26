<?php

namespace Creational\AbstractFactory\ShopSimulator;

class VictorianFurnitureFactory
{
    public function createChair(): Chair
    {
        return new VictorianChair();
    }
}