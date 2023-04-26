<?php

namespace Creational\SimpleFactory\Bank;

class BankA implements IBank
{

    public function withdrew(): string
    {
       return 'Bank A has Withdrew Successfully';
    }
}