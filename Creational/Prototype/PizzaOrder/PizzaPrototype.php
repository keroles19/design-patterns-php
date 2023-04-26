<?php

namespace Creational\Prototype\PizzaOrder;

interface PizzaPrototype
{
    public function clone(): PizzaPrototype;

    public function setPrice(float $price): void;

    public function getPrice(): float;

    public function getToppings(): array;

}