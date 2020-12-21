<?php


namespace Creational\FactoryMethod;


class BmwCarBrand implements CarBrandInterface
{


    public function carBrand() : string
    {
        return "Bmw brand";
    }
}