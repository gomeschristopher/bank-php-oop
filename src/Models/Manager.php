<?php

namespace ChristopherGomes\Bank\Models;

class Manager extends Employee implements Authenticable
{
    public function calcBonus(): float
    {
        return $this->getSalary();
    }

    public function canAuthenticate(string $password): bool
    {
        return $password === '4321';
    }
}