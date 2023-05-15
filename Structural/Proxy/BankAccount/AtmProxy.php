<?php

namespace Structural\Proxy\BankAccount;

class AtmProxy extends BankAccount implements BankAccountInterface
{
    public function __construct(protected $pinCode)
    {
    }

    public function getBalance(): float|int|string
    {
        if ($this->checkPinCode()) {
            return parent::getBalance();
        } else {
            return 'Wrong Credential';
        }

    }

    protected function checkPinCode(): bool
    {
        return $this->pinCode == 1234;
    }
}