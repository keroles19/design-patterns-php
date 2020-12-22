<?php


use Creational\ProtoType\AutomaticCar;
use Creational\ProtoType\ManualCar;
use PHPUnit\Framework\TestCase;

class ProtoTypeTest extends TestCase
{
    public function testCanCreateManualProtoTypeWithClone()
    {
        $carProto = new ManualCar();
        for ($i = 1; $i <= 10; ++$i) {
            $car = clone $carProto;
            $this->assertInstanceOf(ManualCar::class, $car);
        }
    }

    public function testCanCreateAutomaticProtoTypeWithClone()
    {
        $carProto = new AutomaticCar();
        for ($i = 1; $i <= 10; ++$i) {
            $car = clone $carProto;
            $this->assertInstanceOf(AutomaticCar::class, $car);
        }
    }

}
