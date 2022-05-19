<?php

namespace ChristopherGomes\Bank\Models;

trait PropertyAccess
{
    public function __get(string $attributeName)
    {
        $method = 'get' . ucfirst($attributeName);
        return $this->$method();
    }
}