<?php

namespace ChristopherGomes\Bank\Models;

class Developer extends Employee
{
    public function calcBonus(): float
    {
        return $this->getSalary();
    }
}