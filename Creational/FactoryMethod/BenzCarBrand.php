<?php


namespace Creational\FactoryMethod;


class BenzCarBrand implements CarBrandInterface
{

    public function carBrand(): string
    {
        return "benz brand";
    }
}