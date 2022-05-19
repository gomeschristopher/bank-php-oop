<?php

namespace ChristopherGomes\Bank\Models;

class AccountChecking extends Account
{
    protected function percentTariff(): float
    {
        return 0.05;
    }

    public function transfer(float $value, Account $destiny): void
    {
        if ($value > $this->balance) {
            throw new \DomainException('INVALID_VALUE');
        }

        $this->draw($value);
        $destiny->deposit($value);
    }
}