<?php

use Creational\Builder\BenzBuilder;
use Creational\Builder\BmwBuilder;
use Creational\Builder\Modules\BenzCar;
use Creational\Builder\Modules\BmwCar;
use Creational\Builder\ProduceBuilder;
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