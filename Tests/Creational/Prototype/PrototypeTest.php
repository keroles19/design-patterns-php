<?php

namespace Creational\Prototype;

use Creational\Prototype\PizzaOrder\PizzaOrder;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{

    public function test_can_make_new_pizza_order(){
        $pizzaOrderPrototype =  new PizzaOrder(['cheese']);

        // Create a new pizza order by cloning the prototype
        $pizzaOrder1 = $pizzaOrderPrototype->clone();
        $pizzaOrder1->setPrice(10.99);

        // Create another new pizza order by cloning the prototype
        $pizzaOrder2 = $pizzaOrderPrototype->clone();
        $pizzaOrder2->setPrice(12.99);

        // Assert that the pizza orders have the correct toppings and prices
        $this->assertEquals(['cheese'], $pizzaOrder1->getToppings());
        $this->assertEquals(10.99, $pizzaOrder1->getPrice());
        $this->assertEquals(['cheese'], $pizzaOrder2->getToppings());
        $this->assertEquals(12.99, $pizzaOrder2->getPrice());

    }

}