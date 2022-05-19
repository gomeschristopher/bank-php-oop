<?php

namespace ChristopherGomes\Bank\Models;

class AccountSaving extends Account
{
    protected function percentTariff(): float
    {
        return 0.03;
    }
}