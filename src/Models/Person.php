<?php

namespace ChristopherGomes\Bank\Models;

abstract class Person
{
    use PropertyAccess;
    
    protected string $name;
    private Document $document;
    
    public function __construct(string $name, Document $document)
    {
        $this->validateName($name);
        $this->name = $name;
        $this->document = $document;
    }

    final protected function validateName(string $name)
    {
        if(strlen($name) < 5) {
            throw new \DomainException('INVALID_NAME');
        }
    } 
}