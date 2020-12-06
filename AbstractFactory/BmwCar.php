<?php
namespace Creational\AbstractFactory;


class BmwCar implements CarInterFace{

    private $price;
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        return $this->price + 1000;
    }

}