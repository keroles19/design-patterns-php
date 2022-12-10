<?php

use Creational\FactoryMethod\BenzBrandFactory;
use Creational\FactoryMethod\BenzCarBrand;
use Creational\FactoryMethod\BmwBrandFactory;
use Creational\FactoryMethod\BmwCarBrand;
use PHPUnit\Framework\TestCase;

class FactoryMethodExampleTwoTest extends TestCase
{

    public function test_can_make_withdraw_by_factory_method(){

        $factory = new \Creational\FactoryMethodExampleTwo\BankFactory('1');

        $this->assertInstanceOf(\Creational\FactoryMethodExampleTwo\BankA::class, $factory->getBank());

    }

    public function test_can_withdrew_a_equal_bankFactory_withdrew(){
        $factory = (new \Creational\FactoryMethodExampleTwo\BankFactory('1'))->getBank();

        $factory_withdrew =  $factory->withdrew();
        $bankA_withdrew   = (new \Creational\FactoryMethodExampleTwo\BankA())->withdrew();

        $this->assertEquals($factory_withdrew, $bankA_withdrew);

    }

}