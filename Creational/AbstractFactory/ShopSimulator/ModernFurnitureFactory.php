<?php

namespace Creational\AbstractFactory\ShopSimulator;

class ModernFurnitureFactory
{
    public function createChair(): Chair
    {
        return new ModernChair();
    }
}