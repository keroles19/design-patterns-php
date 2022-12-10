<?php

namespace Creational\FactoryMethodExampleTwo;

class BankA implements IBank
{

    public function withdrew(): string
    {
       return 'Bank A has Withdrew Successfully';
    }
}