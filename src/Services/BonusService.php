<?php

namespace ChristopherGomes\Bank\Services;

use ChristopherGomes\Bank\Models\Employee;

class BonusService
{
    private float $totalBonus = 0;

    public function addBonus(Employee $employee)
    {
        $this->totalBonus += $employee->calcBonus();
    }

    public function getTotalBonus(): float
    {
        return $this->totalBonus;
    }
}