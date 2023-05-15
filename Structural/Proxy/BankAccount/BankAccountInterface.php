<?php

namespace Structural\Proxy\BankAccount;

interface BankAccountInterface
{
    public function deposit(int $amount);

    public function withdraw(int $amount);

    public function getBalance();
}