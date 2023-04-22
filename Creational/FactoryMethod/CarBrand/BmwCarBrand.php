<?php


namespace Creational\FactoryMethod\CarBrand;


class BmwCarBrand implements CarBrandInterface
{


    public function carBrand() : string
    {
        return "Bmw brand";
    }
}