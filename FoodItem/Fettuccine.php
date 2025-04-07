<?php

namespace Food_Service_Simulation\FoodItem;

require_once '/../Food_Service_Simulation/FoodItem/FoodItem.php';
class Fettuccine extends FoodItem {
    public function __construct() {
        $name = "Fettuccine";
        $description = "You hava a good taste.";
        $price = 20;
        $cookingTime = 10;
        parent :: __construct($name, $description, $price, $cookingTime);
    }
}