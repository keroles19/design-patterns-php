<?php

namespace FactoryMethod;

use Creational\FactoryMethod\CarBrand\BenzBrandFactory;
use Creational\FactoryMethod\CarBrand\BenzCarBrand;
use Creational\FactoryMethod\CarBrand\BmwBrandFactory;
use Creational\FactoryMethod\CarBrand\BmwCarBrand;
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