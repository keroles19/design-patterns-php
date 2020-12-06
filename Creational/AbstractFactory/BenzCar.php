<?php
namespace Creational\AbstractFactory;


class BenzCar implements CarInterFace{

    private $price;
    private $tax ;
    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice(): int
    {
        return $this->price + $this->tax + 1000;
    }

}