<?php

namespace Restaurants;
use Employees\Casher;
use Invoice;
use Food_Service_Simulation\FoodItem\FoodItem;


class Restaurant {
    private array $menu;
    private array $employees;

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getMenu(): array {
        return $this->menu;
    }

    public function getEmployees() : array {
        return $this->employees;
    }

    public function getCasher() : Casher {
        foreach ($this->employees as $employee) {
            if ($employee instanceof \Employees\Casher) {
                return $employee;
            }
        }
    }
    public function order(array $categories): Invoice {
            
    }
}