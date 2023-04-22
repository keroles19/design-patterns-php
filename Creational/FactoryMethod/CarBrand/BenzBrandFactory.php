<?php


namespace Creational\FactoryMethod\CarBrand;


class BenzBrandFactory implements BrandFactoryInterface
{

    public function buildCarBrand() : BenzCarBrand
    {
        return new BenzCarBrand();
    }
}