<?php

namespace ChristopherGomes\Bank\Models;

final class Document
{
    private string $number;

    public function __construct(string $number)
    {
        $number = filter_var($number, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        if ($number === false) {
            throw new \DomainException('INVALID_DOCUMENT');
        }

        $this->number = $number;
    }

    public function getNumber(): string
    {
        return $this->number;
    }
}
