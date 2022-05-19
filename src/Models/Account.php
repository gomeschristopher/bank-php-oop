<?php

namespace ChristopherGomes\Bank\Models;

abstract class Account
{
    private Owner $owner;
    private float $balance;
    private static int $accountsCount = 0;

    public function __construct(Owner $owner)
    {
        $this->owner = $owner;
        $this->balance = 0;
        self::$accountsCount;
    }

    public function __destruct()
    {
        self::$accountsCount--;
    }

    public function draw(float $value): void
    {
        $drawValue = $value + ($value * $this->percentTariff());

        if ($drawValue > $this->balance) {
            throw new \DomainException('INVALID_VALUE');
        }

        $this->balance -= $value;
    }

    public function deposit(float $value): void
    {
        if ($value <= 0) {
            throw new \DomainException('INVALID_VALUE');
        }

        $this->balance += $value;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }


    public static function getNumberOfAccounts(): int
    {
        return self::$accountsCount;
    }

    abstract protected function percentTariff(): float;
}
