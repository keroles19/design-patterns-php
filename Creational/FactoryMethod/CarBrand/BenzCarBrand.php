<?php


namespace Creational\FactoryMethod\CarBrand;


class BenzCarBrand implements CarBrandInterface
{

    public function carBrand(): string
    {
        return "benz brand";
    }
}