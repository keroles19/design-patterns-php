<?php

namespace Creational\FactoryMethod\Bank;

class BankB implements IBank
{

    public function withdrew(): string
    {
        return 'Bank B has Withdrew Successfully';
    }

}