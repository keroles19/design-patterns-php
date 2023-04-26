<?php

namespace Creational\AbstractFactory\ShopSimulator;

interface FurnitureFactory
{
    public function createChair(): Chair;
}