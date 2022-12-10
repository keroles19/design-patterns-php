<?php

namespace Creational\FactoryMethodExampleTwo;

use phpDocumentor\Reflection\Types\This;

class BankFactory implements IBankFactory
{
    private string $number;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function getBank() : IBank
    {
      if($this->number = 1) {
          return new BankA();
      }else{
          return new BankB();
      }
    }
}