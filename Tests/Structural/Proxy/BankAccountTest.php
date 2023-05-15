<?php

namespace Proxy;

use PHPUnit\Framework\TestCase;
use Structural\Proxy\BankAccount\AtmProxy;

class BankAccountTest extends TestCase
{

  public function test_can_deposit_from_atm_proxy(){
      $atm = new AtmProxy(1234);
      $atm->deposit(1000);
      $atm->deposit(5000);
      $this->assertEquals(6000, $atm->getBalance());
  }

    public function test_can_withdraw_from_atm_proxy(){
        $atm = new AtmProxy(1234);
        $atm->deposit(1000);
        $atm->deposit(5000);
        $atm->withdraw(2000);
        $this->assertEquals(4000, $atm->getBalance());
    }

    public function test_getting_error_credential(){
        $atm = new AtmProxy(12361);
        $this->assertEquals('Wrong Credential', $atm->getBalance());
    }

}