<?php

use Creational\Builder\Car\BenzBuilder;
use Creational\Builder\Car\BmwBuilder;
use Creational\Builder\Car\Modules\BenzCar;
use Creational\Builder\Car\Modules\BmwCar;
use Creational\Builder\Car\ProduceBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanProduceBmwCar()
    {
        $bmw = new BmwBuilder();
        $builder = new ProduceBuilder($bmw);
        $myCar = $builder->produceCar();
        $this->assertInstanceOf(BmwCar::class,$myCar);
    }

    public function testCanProduceBenzCar()
    {
        $benz = new BenzBuilder();
        $builder = new ProduceBuilder($benz);
        $myCar = $builder->produceCar();
        $this->assertInstanceOf(BenzCar::class,$myCar);
    }



}