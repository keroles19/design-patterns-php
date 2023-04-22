<?php


namespace Creational\FactoryMethod\CarBrand;


class BmwBrandFactory implements BrandFactoryInterface
{
    public function buildCarBrand(): BmwCarBrand
    {
        return new BmwCarBrand();
    }

}