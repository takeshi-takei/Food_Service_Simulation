<?php

namespace Employees;

use FoodOrders\FoodOrder;

class Casher extends Employees {
    public function generateOrder(string $categories, Restaurant $restaurant): FoodOrder;

    public function generateInvoice(FoodOrder $order): Invoice;
}