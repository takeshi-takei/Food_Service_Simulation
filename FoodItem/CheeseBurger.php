<?php

namespace Food_Service_Simulation\FoodItem;

require_once '/../Food_Service_Simulation/FoodItem/FoodItem.php';
class CheeseBurger extends FoodItem {
    public function __construct() {
        $name =  "CheeseBurger";
        $description = "ur stomack must be exausted.";
        $price = 25;
        $cookingTime = 10;
        parent :: __construct($name, $description, $price, $cookingTime);    }
}