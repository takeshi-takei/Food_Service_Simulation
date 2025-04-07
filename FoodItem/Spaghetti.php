<?php

namespace Food_Service_Simulation\FoodItem;

require_once '/../Food_Service_Simulation/FoodItem/FoodItem.php';
class Spaghetti extends FoodItem {
    public function __construct() {
        $name = "Spaghetti";
        $description = "Good stuff.";
        $price = 12;
        $cookingTime = 10;
        parent :: __construct($name, $description, $price, $cookingTime);
    }
}