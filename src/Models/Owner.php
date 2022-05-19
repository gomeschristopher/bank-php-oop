<?php

namespace ChristopherGomes\Bank\Models;

class Owner extends Person implements Authenticable
{
    private Address $address;

    public function __construct(string $name, Document $document, Address $address)
    {
        parent::__construct($name, $document);
        $this->address = $address;
    }

    public function canAuthenticate(string $password): bool
    {
        return $password === '12345';
    }
}