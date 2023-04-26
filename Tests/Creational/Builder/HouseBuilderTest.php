<?php

namespace Creational\Builder;

use Creational\Builder\HouseBuilder\BuildHouse;
use Creational\Builder\HouseBuilder\HouseWithGarageBuilder;
use Creational\Builder\HouseBuilder\HouseWithGardenBuilder;
use Creational\Builder\HouseBuilder\HouseWithSwimmingPoolBuilder;
use Creational\Builder\HouseBuilder\Types\HouseWithGarage;
use Creational\Builder\HouseBuilder\Types\HouseWithGarden;
use Creational\Builder\HouseBuilder\Types\HouseWithSwimmingPool;
use PHPUnit\Framework\TestCase;

class HouseBuilderTest extends TestCase
{
    public function test_can_build_house_with_garden(){
        $houseBuilder = new HouseWithGardenBuilder();
        $buildHouse   = new BuildHouse($houseBuilder);

        $this->assertInstanceOf(HouseWithGarden::class, $buildHouse->produceHouse());
    }

    public function test_can_build_house_with_garage(){
        $houseBuilder = new HouseWithGarageBuilder();
        $buildHouse   = new BuildHouse($houseBuilder);

        $this->assertInstanceOf(HouseWithGarage::class, $buildHouse->produceHouse());
    }

    public function test_can_build_house_with_swimming_pool(){
        $houseBuilder = new HouseWithSwimmingPoolBuilder();
        $buildHouse   = new BuildHouse($houseBuilder);

        $this->assertInstanceOf(HouseWithSwimmingPool::class, $buildHouse->produceHouse());
    }
}