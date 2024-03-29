<?php

namespace Creational\SimpleFactory;

use Creational\SimpleFactory\Bank\BankA;
use Creational\SimpleFactory\Bank\BankFactory;
use PHPUnit\Framework\TestCase;

class BankTest extends TestCase
{

    public function test_can_make_withdraw_by_factory_method()
    {

        $factory = new BankFactory('1');

        $this->assertInstanceOf(BankA::class, $factory->getBank());

    }

    public function test_can_withdrew_a_equal_bankFactory_withdrew()
    {
        $factory = (new BankFactory('1'))->getBank();

        $factory_withdrew = $factory->withdrew();
        $bankA_withdrew = (new BankA())->withdrew();

        $this->assertEquals($factory_withdrew, $bankA_withdrew);

    }

}