<?php

namespace Employees;

use Persons\Person;

class Employee extends Person {
    private int $employeeId;
    private float $salary;

    public function __construct(int $employeeId, float $salary) {
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }
}