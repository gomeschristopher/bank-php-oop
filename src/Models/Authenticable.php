<?php

namespace ChristopherGomes\Bank\Models;

interface Authenticable
{
    public function canAuthenticate(string $password): bool;
}