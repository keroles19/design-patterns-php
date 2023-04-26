<?php

namespace Creational\AbstractFactory;


use Creational\AbstractFactory\ShopSimulator\ModernChair;
use Creational\AbstractFactory\ShopSimulator\ModernFurnitureFactory;
use Creational\AbstractFactory\ShopSimulator\VictorianChair;
use Creational\AbstractFactory\ShopSimulator\VictorianFurnitureFactory;
use PHPUnit\Framework\TestCase;

class ShopSimulatorTest extends TestCase
{
    public function test_can_creat_victorian_chair(){

        $factory = new VictorianFurnitureFactory();
        $chair = $factory->createChair();
        $this->assertInstanceOf(VictorianChair::class, $chair);
        $this->assertEquals((new VictorianChair())->create(), $chair->create());
    }


    public function test_can_creat_modern_chair(){

        $factory = new ModernFurnitureFactory();
        $chair = $factory->createChair();
        $this->assertInstanceOf(ModernChair::class, $chair);
        $this->assertEquals((new ModernChair())->create(), $chair->create());
    }
}