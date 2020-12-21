<?php

use Creational\FactoryMethod\BenzBrandFactory;
use Creational\FactoryMethod\BenzCarBrand;
use Creational\FactoryMethod\BmwBrandFactory;
use Creational\FactoryMethod\BmwCarBrand;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanBuildBmwBrand()
    {
        $brand = new BmwBrandFactory();
        $bmwBrand = $brand->buildCarBrand();
        $this->assertInstanceOf(BmwCarBrand::class, $bmwBrand);


    }

    public function testCanBuildBenzBrand()
    {
        $brand = new BenzBrandFactory();
        $bmwBrand = $brand->buildCarBrand();
        $this->assertInstanceOf(BenzCarBrand::class, $bmwBrand);
    }


}