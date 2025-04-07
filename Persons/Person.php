<?php

namespace Persons;

abstract class Person {
    protected string $Name;
    protected int $age;
    protected string $address;

    public function __construct(string $name, int $age, string $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
}

