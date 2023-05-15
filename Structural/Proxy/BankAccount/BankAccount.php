<?php

namespace Structural\Proxy\BankAccount;

class BankAccount implements BankAccountInterface
{
    private array $transactions = [];

    public function deposit(int $amount): bool
    {
        $this->transactions[] = +$amount;
        return true;
    }

    public function withdraw(int $amount): bool|int
    {
        if ($this->getBalance() > $amount) {
            $this->transactions[] = -$amount;
            return $amount;
        }
        return false;
    }

    public function getBalance(): float|int|string
    {
        return array_sum($this->transactions);
    }
}