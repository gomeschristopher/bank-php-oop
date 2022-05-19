<?php

namespace ChristopherGomes\Bank\Models;

class Director extends Employee
{
    public function calcBonus(): float
    {
        return $this->getSalary() * 2;
    }

    public function canAuthenticate(string $password): bool
    {
        return $password === '1234';
    }
}