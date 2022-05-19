<?php

namespace ChristopherGomes\Bank\Models;

final class Address
{
    use PropertyAccess;

    private string $city;
    private string $district;
    private string $street;
    private string $number;

    public function __construct(string $city, string $district, string $street, string $number)
    {
        $this->city = $city;
        $this->district = $district;
        $this->street = $street;
        $this->number = $number;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function __toString(): string
    {
        return "{$this->street}, {$this->number}, {$this->district}, {$this->city}";
    }

    public function __set(string $attributeName, string $value)
    {
        $method = 'set' . ucfirst($attributeName);
        return $this->$method($value);
    }
}
