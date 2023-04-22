<?php
namespace Creational\AbstractFactory\Car;

class CarAbstractFactory{

    private $tax = 1000;
    private $price;

    public function __construct($price)
    {
      $this->price = $price;
    }

    public function createBmwCar() : BmwCar
    {
        return new BmwCar($this->price);
    }

    public function createBenzCar() : BenzCar 
    {
        return new BenzCar($this->price, $this->tax);
    }
  
}