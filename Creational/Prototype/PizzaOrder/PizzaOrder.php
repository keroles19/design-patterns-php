<?php

namespace Creational\Prototype\PizzaOrder;

class PizzaOrder implements PizzaPrototype
{
    private $toppings = [];
    private $price = 0.0;

    public function __construct(array $toppings)
    {
        $this->toppings = $toppings;
    }

    public function clone(): PizzaPrototype
    {
        $order = new PizzaOrder($this->toppings);
        $order->setPrice($this->price);
        return $order;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getToppings(): array
    {
        return $this->toppings;
    }
}