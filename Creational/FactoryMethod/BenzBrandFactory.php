<?php


namespace Creational\FactoryMethod;


class BenzBrandFactory implements BrandFactoryInterface
{

    public function buildCarBrand() : BenzCarBrand
    {
        return new BenzCarBrand();
    }
}