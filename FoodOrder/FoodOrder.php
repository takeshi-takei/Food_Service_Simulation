<?php

namespace FoodOrders;

use Food_Service_Simulation\FoodItem\FoodItem;

class FoodOrder {
    protected array $items;
    protected Timestamp $orderTime;

    public function __construct(array $items, int $orderTime) {
        $this->items = $items;
        $this->orderTime = $orderTime;
    }

    public function 
}