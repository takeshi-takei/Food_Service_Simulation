<?php

namespace Employees;

use FoodOrders\FoodOrder;
use Restaurants\Restaurant;

class Casher extends Employee {
    public function generateOrder(array $categories, Restaurant $Restaurant): FoodOrder {
        $name = $this->Name;
        echo "The casher {$name} created a food order\n";
        $Restaurant->order($categories);
    }
    public function generateInvoice(FoodOrder $order): Invoice {
        
    }

}