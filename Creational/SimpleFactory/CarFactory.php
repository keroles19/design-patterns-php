<?php


namespace Creational\SimpleFactory;


class CarFactory
{
    public function createCar(string $type): Car
    {

        return new Car($type);
    }

}