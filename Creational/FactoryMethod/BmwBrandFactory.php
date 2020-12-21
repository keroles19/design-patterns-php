<?php


namespace Creational\FactoryMethod;


class BmwBrandFactory implements BrandFactoryInterface
{
    public function buildCarBrand(): BmwCarBrand
    {
        return new BmwCarBrand();
    }

}